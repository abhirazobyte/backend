<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\Page;
use App\Models\ContentType;
use App\Models\HomeSlider;
use App\Models\Gallery;
use App\Models\Language;
use App\Models\LanguageDetail;
use App\Models\ContentTypeLookup;

class ApiController extends Controller
{
    /**
     * Helper to append full asset URLs to image and banner attributes.
     */
    private function appendImageUrls($data)
    {
        if (!$data) {
            return $data;
        }

        if ($data instanceof \Illuminate\Support\Collection) {
            $data->each(function ($item) {
                $this->appendImageUrls($item);
            });
            return $data;
        }

        if (is_object($data)) {
            if (!empty($data->image) && !filter_var($data->image, FILTER_VALIDATE_URL)) {
                $data->image = asset('normal_images/' . ltrim($data->image, '/'));
            }
            if (!empty($data->banner) && !filter_var($data->banner, FILTER_VALIDATE_URL)) {
                $data->banner = asset('normal_images/' . ltrim($data->banner, '/'));
            }
        }

        return $data;
    }

    // ─────────────────────────────────────────────
    // #0  Content Type List (type lookup)
    // GET /api/content-type-list
    // ─────────────────────────────────────────────
    public function ContentTypeList()
    {
        try {
            $types = ContentTypeLookup::orderBy('id', 'asc')
                ->get(['id', 'name', 'slug', 'category', 'page_scope', 'description']);

            return response()->json([
                'status' => true,
                'data'   => $types,
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    // ─────────────────────────────────────────────
    // #1  Blog List  (already built)
    // GET /api/blog-list
    // ─────────────────────────────────────────────
    public function BlogList()
    {
        try {
            $data = Blog::where('status', 1)->get(['title', 'image', 'slug']);
            $this->appendImageUrls($data);
            return response()->json([
                'status' => true,
                'data'   => $data,
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    // ─────────────────────────────────────────────
    // #2  Blog Detail  (already built)
    // GET /api/blog-detail/{slug}
    // ─────────────────────────────────────────────
    public function BlogDetail($slug)
    {
        try {
            $data = Blog::where('status', 1)
                ->where('slug', $slug)
                ->first(['id', 'title', 'image', 'content']);

            if (!$data) {
                return response()->json(['status' => false, 'message' => 'Blog not found'], 404);
            }

            $recentBlog = Blog::where('status', 1)
                ->where('id', '!=', $data->id)
                ->orderBy('id', 'desc')
                ->limit(10)
                ->get(['title', 'image', 'slug']);

            $this->appendImageUrls($data);
            $this->appendImageUrls($recentBlog);

            return response()->json([
                'status'     => true,
                'data'       => $data,
                'recentBlog' => $recentBlog,
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    // ─────────────────────────────────────────────
    // #3  Language Page  (all pages)
    // GET /api/language-page/{slug}
    //   Sections: Global PR by Investment Opportunities,
    //             FAQ, Discover the Arab World section
    // ─────────────────────────────────────────────
    public function LanguagePage($slug)
    {
        try {
            // Language pages are stored in the `pages` table with post_type = 'language'
            $page = Page::where('post_type', 'language')
                ->where('status', 1)
                ->where('url', $slug)
                ->first();

            if (!$page) {
                return response()->json(['status' => false, 'message' => 'Language page not found'], 404);
            }

            // Sub-courses / detail pages for this language (slider data)
            $details = LanguageDetail::where('language_id', $page->id)
                ->where('status', 1)
                ->orderBy('id', 'asc')
                ->get(['id', 'title', 'image', 'banner', 'content', 'slug', 'course_feature', 'important_info']);

            // Global PR by Investment Opportunities  (type tag: 'pr_opportunity' or type id-based)
            // stored in content_types table – type 46 is languge page PR opportunities (adjust tag as needed)
            $prOpportunities = ContentType::where('status', 1)
                ->where('type', 46)
                ->get(['id', 'title', 'content', 'image']);

            // FAQs scoped to Language Page (type 45 = page-4 + faq-5)
            $faqs = ContentType::where('status', 1)
                ->where('type', 45)
                ->get(['id', 'title', 'content']);

            $this->appendImageUrls($page);
            $this->appendImageUrls($details);
            $this->appendImageUrls($prOpportunities);
            $this->appendImageUrls($faqs);

            return response()->json([
                'status'          => true,
                'page'            => $page,
                'details'         => $details,
                'pr_opportunities' => $prOpportunities,
                'faqs'            => $faqs,
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    // ─────────────────────────────────────────────
    // #4  Events
    // GET /api/events
    //   Sections: Images, Content
    // ─────────────────────────────────────────────
    public function Events()
    {
        try {
            // Events are stored as pages with post_type = 'event'
            // or as gallery items with data_filter = 'event'
            $events = Page::where('post_type', 'event')
                ->where('status', 1)
                ->orderBy('id', 'desc')
                ->get(['id', 'title', 'content', 'image', 'banner', 'url']);

            // Gallery images tagged as events
            $eventGallery = Gallery::where('data_filter', 'event')
                ->orderBy('id', 'desc')
                ->get(['id', 'title', 'image', 'type']);

            $this->appendImageUrls($events);
            $this->appendImageUrls($eventGallery);

            return response()->json([
                'status'        => true,
                'events'        => $events,
                'event_gallery' => $eventGallery,
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    // ─────────────────────────────────────────────
    // #5  PR By Investment – Country Pages (all)
    // GET /api/pr-investment/{slug}
    //   Sections: Eligibility Criteria, Benefits,
    //             Global PR Opportunities, Banner, FAQ
    // ─────────────────────────────────────────────
    public function PrInvestmentCountry($slug)
    {
        try {
            $page = Page::where('post_type', 'pr_investment')
                ->where('status', 1)
                ->where('url', $slug)
                ->first();

            if (!$page) {
                return response()->json(['status' => false, 'message' => 'Page not found'], 404);
            }

            // Global PR opportunities (content_type id 6)
            $prOpportunities = ContentType::where('status', 1)
                ->where('type', 36)
                ->get(['id', 'title', 'content', 'image']);

            // FAQs scoped to PR Investment Country page (type 35 = page-3 + faq-5)
            $faqs = ContentType::where('status', 1)
                ->where('type', 35)
                ->get(['id', 'title', 'content']);

            $this->appendImageUrls($page);
            $this->appendImageUrls($prOpportunities);
            $this->appendImageUrls($faqs);

            return response()->json([
                'status'           => true,
                'page'             => $page,   // contains banner, eligibility (content), benefits (content_2)
                'pr_opportunities'  => $prOpportunities,
                'faqs'             => $faqs,
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    // ─────────────────────────────────────────────
    // #6  nslookup ftp.langmainternational.com Page
    // GET /api/home
    //   Sections: Top Video / Study Abroad / About Us,
    //             Global Opportunity (content & language),
    //             Top Popular Courses,
    //             Blogs,
    //             Langma Unites the World,
    //             FAQ,
    //             Study in Top Higher Education Destinations
    // ─────────────────────────────────────────────
    public function HomePage()
    {
        try {
            $sliders = HomeSlider::where('status', 1)
                ->orderBy('id', 'asc')
                ->get(['id', 'title', 'image', 'status']);

            $languages = Page::where('post_type', 'language')
                ->where('status', 1)
                ->orderBy('title')
                ->get(['id', 'title', 'image', 'url']);

            $popularCourses = ContentType::where('status', 1)
                ->where('type', 1)
                ->orderBy('id', 'asc')
                ->get(['id', 'title', 'content', 'image']);

            $blogs = Blog::where('status', 1)
                ->orderBy('id', 'desc')
                ->limit(6)
                ->get(['id', 'title', 'image', 'slug']);

            $langmaUnites = ContentType::where('status', 1)
                ->where('type', 2)
                ->get(['id', 'title', 'content', 'image']);

            $faqs = ContentType::where('status', 1)
                ->where('type', 15)
                ->get(['id', 'title', 'content']);

            $studyDestinations = ContentType::where('status', 1)
                ->where('type', 3)
                ->get(['id', 'title', 'content', 'image']);

            $aboutUs = Page::where('type', 1)->first(['id', 'title', 'content', 'banner', 'image']);

            $this->appendImageUrls($sliders);
            $this->appendImageUrls($languages);
            $this->appendImageUrls($popularCourses);
            $this->appendImageUrls($blogs);
            $this->appendImageUrls($langmaUnites);
            $this->appendImageUrls($faqs);
            $this->appendImageUrls($studyDestinations);
            $this->appendImageUrls($aboutUs);

            return response()->json([
                'status'             => true,
                'sliders'            => $sliders,
                'languages'          => $languages,
                'popular_courses'    => $popularCourses,
                'blogs'              => $blogs,
                'langma_unites'      => $langmaUnites,
                'faqs'               => $faqs,
                'study_destinations' => $studyDestinations,
                'about_us'           => $aboutUs,
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    // ─────────────────────────────────────────────
    // #7  International Language (listing page)
    // GET /api/international-languages
    //   Sections: Top Banner, First Content Part,
    //             Speak a language fearlessly
    // ─────────────────────────────────────────────
    public function InternationalLanguages()
    {
        try {
            // The main "Languages" page banner / intro content
            $languagePage = Page::where('post_type', 'page')
                ->where('url', 'languages')
                ->first(['id', 'title', 'content', 'content_2', 'banner', 'image']);

            // All active language tiles
            $languages = Page::where('post_type', 'language')
                ->where('status', 1)
                ->orderBy('title')
                ->get(['id', 'title', 'image', 'url', 'content']);

            // "Speak a language fearlessly" content items (type 1)
            $speakFearlessly = ContentType::where('status', 1)
                ->where('type', 1)
                ->orderBy('id', 'asc')
                ->get(['id', 'title', 'content', 'image']);

            $this->appendImageUrls($languagePage);
            $this->appendImageUrls($languages);
            $this->appendImageUrls($speakFearlessly);

            return response()->json([
                'status'           => true,
                'language_page'    => $languagePage,
                'languages'        => $languages,
                'speak_fearlessly' => $speakFearlessly,
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    // ─────────────────────────────────────────────
    // #8  Language Detail Information
    // GET /api/language-detail/{slug}
    //   Sections: FAQs
    // ─────────────────────────────────────────────
    public function LanguageDetail($slug)
    {
        try {
            $language = Page::where('post_type', 'language')
                ->where('url', $slug)
                ->where('status', 1)
                ->first();

            if (!$language) {
                return response()->json(['status' => false, 'message' => 'Language not found'], 404);
            }

            // Sub-course / detail pages for this language
            $details = LanguageDetail::where('language_id', $language->id)
                ->where('status', 1)
                ->orderBy('id', 'asc')
                ->get(['id', 'title', 'image', 'banner', 'content', 'slug', 'course_feature', 'important_info']);

            // FAQs scoped to Language Detail page (type 75 = page-7 + faq-5)
            $faqs = ContentType::where('status', 1)
                ->where('type', 75)
                ->get(['id', 'title', 'content']);

            $this->appendImageUrls($language);
            $this->appendImageUrls($details);
            $this->appendImageUrls($faqs);

            return response()->json([
                'status'   => true,
                'language' => $language,
                'details'  => $details,
                'faqs'     => $faqs,
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    // ─────────────────────────────────────────────
    // #9  Study Abroad
    // GET /api/study-abroad
    //   Sections: Banner, First paragraph content, FAQ
    // ─────────────────────────────────────────────
    public function StudyAbroad()
    {
        try {
            $page = Page::where('post_type', 'page')
                ->where('url', 'study-abroad')
                ->first(['id', 'title', 'content', 'content_2', 'banner', 'image']);

            // FAQs scoped to Study Abroad page (type 25 = page-2 + faq-5)
            $faqs = ContentType::where('status', 1)
                ->where('type', 25)
                ->get(['id', 'title', 'content']);

            $this->appendImageUrls($page);
            $this->appendImageUrls($faqs);

            return response()->json([
                'status' => true,
                'page'   => $page,
                'faqs'   => $faqs,
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    // ─────────────────────────────────────────────
    // #10  Work Abroad
    // GET /api/work-abroad
    //   Sections: Banner, First content, FAQ,
    //             Explore Work Destinations (country flags)
    // ─────────────────────────────────────────────
    public function WorkAbroad()
    {
        try {
            $page = Page::where('post_type', 'page')
                ->where('url', 'work-abroad')
                ->first(['id', 'title', 'content', 'content_2', 'banner', 'image']);

            // FAQs scoped to Work Abroad page (type 55 = page-5 + faq-5)
            $faqs = ContentType::where('status', 1)
                ->where('type', 55)
                ->get(['id', 'title', 'content']);

            // Country destinations for "work abroad" (type 7 = work destinations)
            $destinations = ContentType::where('status', 1)
                ->where('type', 7)
                ->orderBy('id', 'asc')
                ->get(['id', 'title', 'image']);

            $this->appendImageUrls($page);
            $this->appendImageUrls($faqs);
            $this->appendImageUrls($destinations);

            return response()->json([
                'status'       => true,
                'page'         => $page,
                'faqs'         => $faqs,
                'destinations' => $destinations,
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    // ─────────────────────────────────────────────
    // #11  Global Assist (Global Placement)
    // GET /api/global-assist
    //   Sections: Banner, Two editors (content blocks), FAQ
    // ─────────────────────────────────────────────
    public function GlobalAssist()
    {
        try {
            $page = Page::where('post_type', 'page')
                ->where('url', 'global-assist')
                ->first(['id', 'title', 'content', 'content_2', 'banner', 'image']);

            // FAQs scoped to Global Assist page (type 65 = page-6 + faq-5)
            $faqs = ContentType::where('status', 1)
                ->where('type', 65)
                ->get(['id', 'title', 'content']);

            $this->appendImageUrls($page);
            $this->appendImageUrls($faqs);

            return response()->json([
                'status' => true,
                'page'   => $page,   // content = editor 1, content_2 = editor 2, banner = banner
                'faqs'   => $faqs,
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    // ─────────────────────────────────────────────
    // #12  Cultural Holidays
    // GET /api/cultural-holidays
    //   Sections: Recommended Trips, Explore India
    // ─────────────────────────────────────────────
    public function CulturalHolidays()
    {
        try {
            $page = Page::where('post_type', 'page')
                ->where('url', 'cultural-holidays')
                ->first(['id', 'title', 'content', 'content_2', 'banner', 'image']);

            // Recommended Trips – type 8 in content_types
            $recommendedTrips = ContentType::where('status', 1)
                ->where('type', 8)
                ->orderBy('id', 'asc')
                ->get(['id', 'title', 'content', 'image']);

            // Explore India – type 9 in content_types
            $exploreIndia = ContentType::where('status', 1)
                ->where('type', 9)
                ->orderBy('id', 'asc')
                ->get(['id', 'title', 'content', 'image']);

            $this->appendImageUrls($page);
            $this->appendImageUrls($recommendedTrips);
            $this->appendImageUrls($exploreIndia);

            return response()->json([
                'status'            => true,
                'page'              => $page,
                'recommended_trips' => $recommendedTrips,
                'explore_india'     => $exploreIndia,
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    // ─────────────────────────────────────────────
    // #13  PR By Investment – Country Pages (all)
    // GET /api/pr-investment-countries
    //   Sections: Global PR opportunities, Eligibility, Benefits
    // ─────────────────────────────────────────────
    public function PrInvestmentCountries()
    {
        try {
            $countries = Page::where('post_type', 'pr_investment')
                ->where('status', 1)
                ->orderBy('title')
                ->get(['id', 'title', 'content', 'content_2', 'banner', 'image', 'url']);

            $prOpportunities = ContentType::where('status', 1)
                ->where('type', 6)
                ->get(['id', 'title', 'content', 'image']);

            $this->appendImageUrls($countries);
            $this->appendImageUrls($prOpportunities);

            return response()->json([
                'status'           => true,
                'countries'        => $countries,
                'pr_opportunities' => $prOpportunities,
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    // ─────────────────────────────────────────────
    // #14  PR By Investment – Main Page
    // GET /api/pr-investment
    //   Sections: Global Residency Investment Options
    //             (flag image, country name, pointers)
    // ─────────────────────────────────────────────
    public function PrInvestmentMain()
    {
        try {
            $page = Page::where('post_type', 'page')
                ->where('url', 'pr-investment')
                ->first(['id', 'title', 'content', 'content_2', 'banner', 'image']);

            // Global Residency Investment Options (type 6)
            $investmentOptions = ContentType::where('status', 1)
                ->where('type', 6)
                ->orderBy('id', 'asc')
                ->get(['id', 'title', 'content', 'image']);

            $this->appendImageUrls($page);
            $this->appendImageUrls($investmentOptions);

            return response()->json([
                'status'            => true,
                'page'              => $page,
                'investment_options' => $investmentOptions,
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    // ─────────────────────────────────────────────
    // #15  Languages Page – Scrollable Language List
    // GET /api/languages
    //   Sections: Scrollable Language list
    // ─────────────────────────────────────────────
    public function LanguagesList()
    {
        try {
            $languages = Page::where('post_type', 'language')
                ->where('status', 1)
                ->orderBy('title')
                ->get(['id', 'title', 'image', 'url']);

            $this->appendImageUrls($languages);

            return response()->json([
                'status'    => true,
                'languages' => $languages,
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    // ─────────────────────────────────────────────
    // #16  Career Page
    // GET /api/career
    //   Sections: Open Opportunities
    // ─────────────────────────────────────────────
    public function CareerPage()
    {
        try {
            $page = Page::where('type', 2)
                ->first(['id', 'title', 'content', 'content_2', 'banner', 'image']);

            // Open opportunities (type 10 = career openings in content_types)
            $openings = ContentType::where('status', 1)
                ->where('type', 10)
                ->orderBy('id', 'asc')
                ->get(['id', 'title', 'content', 'image']);

            $this->appendImageUrls($page);
            $this->appendImageUrls($openings);

            return response()->json([
                'status'   => true,
                'page'     => $page,
                'openings' => $openings,
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    // ─────────────────────────────────────────────
    // #17  Events – Image & Content
    // GET /api/event-gallery
    //   Sections: Image, Content of Image
    // ─────────────────────────────────────────────
    public function EventGallery()
    {
        try {
            $eventImages = Gallery::where('data_filter', 'event')
                ->orderBy('id', 'desc')
                ->get(['id', 'title', 'image', 'type']);

            $this->appendImageUrls($eventImages);

            return response()->json([
                'status' => true,
                'images' => $eventImages,
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }
}
