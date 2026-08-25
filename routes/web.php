<?php

use App\Http\Middleware\VerifyCsrfToken;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProgramQueryController;
use App\Http\Controllers\StudyInternationalController;
use App\Http\Controllers\RazorpayPaymentController;
use App\Http\Controllers\RazorpayController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ThesunvillageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LanguageDetailController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ContentTypeController;
use App\Http\Controllers\AffiliationController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\PeopleQueryController;
use App\Http\Controllers\FollowupController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');

    // Artisan::call('view:clear');

    //  Artisan::call('config:cache');
    //  Artisan::call('config:clear');

    //  Artisan::call('route:cache');
    //  Artisan::call('route:clear');

    //  Artisan::call('optimize');
     Artisan::call('optimize:clear');

    // Clear home page caches
    \Illuminate\Support\Facades\Cache::forget('home_page_api');
    \Illuminate\Support\Facades\Cache::forget('home_page_web');

    //return "Cache is cleared"; // you can replace your redirect
    return redirect('https://langmainternational.com');
    });


    //Route::get('greeting', 'RazorpayController@index');

Route::get('/version', function () {
    return view('welcome');
});

//  verifyzoom
Route::get('verifyzoom', function () {
    return view('verifyzoom.verifyzoom');
   //return base_path('verifyzoom.verifyzoom');
});



// ajax testing starts
// Route::get('/mycountry',[DefaultController::class, 'mycountry'])->name('mycountry');
 //Route::post('/formcountry',[DefaultController::class, 'formcountry'])->name('formcountry');
// ajax testing ends
Route::get('/ping', function () {
    return 'ok';
});
// home page form
Route::post('/leads',[ProgramController::class, 'leads'])->name('leads');
// home page form ends
Route::post('/apply-submit',[ProgramController::class, 'applySubmit'])->name('applySubmit');
Route::post('/enquireleads',[DefaultController::class, 'enquireleads'])->name('enquireleads');

//  fronted website route starts here...
Route::get('/',[DefaultController::class, 'home'])->name('home');
// Route::get('/', function(){
//     echo "hi"; exit();
// });
Route::get('foreign-language-courses-in-Uae',[DefaultController::class, 'uae']);
Route::get('foreign-language-courses-in-dubai',[DefaultController::class, 'dubai']);
Route::get('foreign-language-courses-in-abu-dhabi',[DefaultController::class, 'dhabi']);
Route::get('foreign-language-courses-in-sharjah',[DefaultController::class, 'sharjah']);
Route::get('foreign-language-courses-in-ajman',[DefaultController::class, 'ajman']);
Route::get('foreign-language-courses-in-umm-al-quwain',[DefaultController::class, 'quwain']);
Route::get('foreign-language-courses-in-fujairah',[DefaultController::class, 'fujairah']);
Route::get('foreign-language-courses-in-sri-lanka',[DefaultController::class, 'lanka']);
Route::get('foreign-language-courses-in-nepal',[DefaultController::class, 'nepal']);
Route::get('foreign-language-courses-in-bangladesh',[DefaultController::class, 'bangladesh']);
Route::get('foreign-language-courses-in-singapore',[DefaultController::class, 'singapore']);
Route::get('foreign-language-courses-in-australia',[DefaultController::class, 'australia']);

// Route::get('/about',[DefaultController::class, 'about'])->name('about');
Route::get('/about-us',[DefaultController::class, 'about_us'])->name('about-us');
Route::get('/our-vision',[DefaultController::class, 'our_vision'])->name('our-vision');
Route::get('/our-staff',[DefaultController::class, 'our_staff'])->name('our-staff');
Route::get('/terms-and-conditions',[DefaultController::class, 'terms_and_conditions'])->name('terms-and-conditions');
Route::get('/faqs',[DefaultController::class, 'faqs'])->name('faqs');
// Services starts
Route::get('/transcription',[DefaultController::class, 'transcription'])->name('transcription');
Route::get('/translation',[DefaultController::class, 'translation'])->name('translation');
Route::get('/translation-services',[DefaultController::class, 'translationService'])->name('translation_service');
Route::get('/localization',[DefaultController::class, 'localization'])->name('localization');
Route::get('/multilanguage',[DefaultController::class, 'multilanguage'])->name('multilanguage');
Route::get('/proofreading',[DefaultController::class, 'proofreading'])->name('proofreading');
Route::get('/voiceover',[DefaultController::class, 'voiceover'])->name('voiceover');

Route::get('/content-modulation',[DefaultController::class, 'content_modulation'])->name('content-modulation');
Route::get('/content-writing',[DefaultController::class, 'content_writing'])->name('content-writing');
Route::get('/dubbing',[DefaultController::class, 'dubbing'])->name('dubbing');
Route::get('/subtitle',[DefaultController::class, 'subtitle'])->name('subtitle');

Route::get('/service',[DefaultController::class, 'service'])->name('service');
// Services ends
Route::get('/what-we-get',[DefaultController::class, 'whatweget'])->name('what-we-get');
Route::get('/multicultural-marketing',[DefaultController::class, 'multicultural_marketing'])->name('multicultural_marketing');

Route::get('/search',[DefaultController::class, 'search']);
Route::get('/blog',[DefaultController::class, 'blog'])->name('blog');
Route::get('/blog/{title}',[DefaultController::class, 'blogDetail'])->name('blogDetail');
Route::post('/search',[DefaultController::class, 'blogSearch'])->name('blogSearch');
// Route::post('/search', 'DefaultController@blogSearch');
Route::get('/signup',[SignupController::class, 'signup'])->name('signup');

Route::post('/contact-lead',[ContactController::class, 'contactlead'])->name('contactlead');

Route::post('/courses-lead',[ContactController::class, 'courseslead'])->name('courseslead');
Route::post('/program-lead',[ProgramController::class, 'programLead'])->name('programLead');
Route::get('/program',[DefaultController::class, 'program'])->name('program');
Route::get('/career',[DefaultController::class, 'career'])->name('career');
Route::post('/career-enquiry',[DefaultController::class, 'careerEnquiry'])->name('careerEnquiry');
Route::post('/lead',[DefaultController::class, 'leadEnquiry'])->name('leadEnquiry');
Route::get('/language/detail/{id}', 'DefaultController@languageInternalPage');
Route::get('/{id}/{slug}',[DefaultController::class, 'languageInternalPage'])->where('id', '[0-9]+');//->name('program')
// Route::get('/{id}/{slug}', function(){
//     echo "hi";
// })

Route::get('/gallery',[DefaultController::class, 'gallery'])->name('gallery');

Route::get('/contact',[DefaultController::class, 'contact'])->name('contact');

Route::post('/contact-form',[ContactController::class, 'contactform'])->name('contactform');
Route::get('/thank-you-form',[ContactController::class, 'thank_you_form'])->name('thank-you-form');

// Route::get('/thank-you-form', function(){return view('frontend/thank-you-form');});

Route::get('/contact-course',[DefaultController::class, 'contact_course'])->name('contact-course');

Route::get('/enquiry',[DefaultController::class, 'enquiry'])->name('enquiry'); //apply-now

Route::get('/refund-policy',[DefaultController::class, 'refund_policy'])->name('refund-policy');
Route::get('/privacy-policy',[DefaultController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/disclaimer',[DefaultController::class, 'disclaimer'])->name('disclaimer');

// landng page starts
// Route::get('/russian',[DefaultController::class, 'russian'])->name('russian');
// Route::get('/english',[DefaultController::class, 'english'])->name('english');
// Route::get('/japanese',[DefaultController::class, 'japanese'])->name('japanese');
// Route::get('/german',[DefaultController::class, 'german'])->name('german');
// Route::get('/spanish',[DefaultController::class, 'spanish'])->name('spanish');
// Route::get('/french',[DefaultController::class, 'french'])->name('french');

// Route::middleware(['htmlMinifier'])->group(static function(){
// });
// Route::get('/learn-arabic-language',[LandingController::class, 'arabic'])->name('arabic');
// Route::get('/learn-chinese-language',[LandingController::class, 'chinese'])->name('chinese');
// Route::get('/learn-english-language',[LandingController::class, 'english'])->name('english');
// Route::get('/learn-french-language',[LandingController::class, 'french'])->name('french');
// Route::get('/learn-german-language',[LandingController::class, 'german'])->name('german');
// Route::get('/learn-italian-language',[LandingController::class, 'italian'])->name('italian');
// Route::get('/learn-japanese-language',[LandingController::class, 'japanese'])->name('japanese');
// Route::get('/learn-korean-language',[LandingController::class, 'korean'])->name('korean');
// Route::get('/learn-russian-language',[LandingController::class, 'russian'])->name('russian');
// Route::get('/learn-spanish-language',[LandingController::class, 'spanish'])->name('spanish');

// landng page ends
// Route::get('/french-landing-page',[LandingController::class, 'french_page']);
// Route::get('/japanese-landing-page',[LandingController::class, 'japanese_page']);
// Route::get('/chinese-landing-page',[LandingController::class, 'chinese_page']);
Route::get('/learn-chinese-language',[LandingController::class, 'chinese_page'])->name('chinese');
// Route::get('/german-landing-page',[LandingController::class, 'german_page']);

Route::get('/learn-german-language',[LandingController::class, 'german_page'])->name('german');
Route::get('/learn-asian-language',[LandingController::class, 'asian_page'])->name('asian');
Route::get('/learn-european-language',[LandingController::class, 'european_page'])->name('european');
// Route::get('/korean-landing-page',[LandingController::class, 'korean_page']);
Route::get('/learn-korean-language',[LandingController::class, 'korean_page'])->name('korean');
Route::get('/learn-french-language',[LandingController::class, 'french_page']);

Route::get('/learn-japanese-language',[LandingController::class, 'japanese_page']);
// Route::get('/learn-japanese-languages',[LandingController::class, 'japanese_pages']);

// Route::get('/english-landing-page',[LandingController::class, 'english_page']);
Route::get('/learn-english-language',[LandingController::class, 'english_page'])->name('english');
// Route::get('/dutch-landing-page',[LandingController::class, 'dutch_page']);
Route::get('/learn-dutch-language',[LandingController::class, 'dutch_page'])->name('dutch');
// Route::get('/spanish-landing-page',[LandingController::class, 'spanish_page']);
Route::get('/learn-spanish-language',[LandingController::class, 'spanish_page'])->name('spanish');
// Route::get('/arabic-landing-page',[LandingController::class, 'arabic_page']);
Route::get('/learn-arabic-language',[LandingController::class, 'arabic_page'])->name('arabic');
// Route::get('/italian-landing-page',[LandingController::class, 'italian_page']);
Route::get('/learn-italian-language',[LandingController::class, 'italian_page'])->name('italian');
// Route::get('/russian-landing-page',[LandingController::class, 'russian_page']);
Route::get('/learn-russian-language',[LandingController::class, 'russian_page'])->name('russian');

Route::get('/german-guide',[DefaultController::class, 'german_guide'])->name('german-guide');
Route::post('/russian-enquiry',[DefaultController::class, 'russianEnquiry'])->name('russianEnquiry');
Route::post('/french-enquiry',[DefaultController::class, 'frenchEnquiry'])->name('frenchEnquiry');

Route::post('/signup',[SignupController::class, 'signup'])->name('signup');
Route::post('/signup',[SignupController::class, 'signupEnquiry'])->name('signupEnquiry');
Route::get('/our-testimonials',[DefaultController::class, 'ourTestimonials'])->name('ourTestimonials');
Route::get('/apply-now',[DefaultController::class, 'applyNow'])->name('applyNow');

Route::get('/thank-you',[DefaultController::class, 'thank_you'])->name('thank-you');
Route::get('/language-test-page', function(){ return view('frontend/language-test-page'); });
Route::get('/language-test-page-second', function(){ return view('frontend/language-test-page-second'); });

Route::get('/thank-you-certi',[DefaultController::class, 'thank_you_certi'])->name('thank-you-certi');

Route::get('/certificate',[CertificateController::class, 'certificate'])->name('certificate');
Route::post('/certificate',[CertificateController::class, 'certificateEnquiry'])->name('certificateEnquiry');

// payment
Route::get('/payment', [RazorpayPaymentController::class, 'index']);
Route::post('/payment', [RazorpayPaymentController::class, 'store'])->name('payment');

# study-international Study International starts here...
Route::get('/study-international',[StudyInternationalController::class, 'study_international'])->name('study-international');
Route::get('/russia-medical',[StudyInternationalController::class, 'russia_medical'])->name('russia-medical');
Route::get('/management-france',[StudyInternationalController::class, 'management_france'])->name('management-france');
Route::get('/switzerland',[StudyInternationalController::class, 'switzerland'])->name('switzerland');
Route::get('/spain',[StudyInternationalController::class, 'spain'])->name('spain');
Route::get('/uae',[StudyInternationalController::class, 'uae'])->name('uae');
Route::get('/korea',[StudyInternationalController::class, 'korea'])->name('korea');
# study-international Study International ends here...

Route::get('/{type}',[DefaultController::class, 'getPageByType'])->name('getPageByType');
// Route::get('/{type}', function(){
//     echo "type"; exit();
// });

Route::get('/gallery/image',[DefaultController::class, 'image'])->name('image');
Route::get('/gallery/video',[DefaultController::class, 'video'])->name('video');
Route::get('/news-events',[DefaultController::class, 'newsEvents'])->name('newsEvents');
Route::get('/thank1-you', function(){return view('frontend/thank1-you');});
Route::get('/pdfview',[PdfController::class, 'pdfview'])->name('pdfview');
//  fronted website route ends here...





// admin panel starts here...
// auth starts...
// Route::get('/admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');
// Route::resource('/admin/program-app', ProgramQueryController::class);

Route::post('/auth/save',[AdminController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[AdminController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[AdminController::class, 'logout'])->name('auth.logout');

Route::group(['middleware'=>['AuthCheck']], function(){

    Route::get('/auth/login',[AdminController::class, 'login'])->name('auth.login'); // /auth/login
    Route::get('/auth/register',[AdminController::class, 'register'])->name('auth.register'); // /auth/register

    Route::get('/admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::resource('/admin/thesunvillage', ThesunvillageController::class);

    Route::resource('/admin/page',PageController::class);

    Route::resource('/admin/setting',SettingController::class);
    // auth ends...

    // home starts...
    Route::resource('/admin/home-slider', HomeSliderController::class);
 	Route::resource('/admin/language', LanguageController::class);
 	Route::resource('/admin/language-detail', LanguageDetailController::class);
	Route::get('/admin/language-page/{id}', [LanguageDetailController::class, 'detail'])->name('detail');

    Route::resource('/admin/content', ContentController::class);
    Route::resource('/admin/content-type', ContentTypeController::class);
 	Route::resource('/admin/affiliation', AffiliationController::class);
 	Route::resource('/admin/exam', ExamController::class);
    // home ends...
    Route::resource('/admin/gallery', GalleryController::class);
    Route::resource('/admin/client', ClientController::class);
    Route::resource('/admin/review', ReviewController::class);
    Route::resource('/admin/blog',BlogController::class);
    Route::resource('/admin/files', FileController::class);
    // enquiry starts...

    Route::get('/admin/career-enquiry', [DefaultController::class, 'careerEnquiryLead'])->name('careerEnquiryLead');
    Route::get('/admin/lead-enquiry', [DefaultController::class, 'getEnquiryLead'])->name('getEnquiryLead');
    Route::get('/admin/course-enquiry', [DefaultController::class, 'courseEnquiryLead'])->name('courseEnquiryLead');

    // Route::get('/admin/service-enquiry', [DefaultController::class, 'serviceEnquiryLead'])->name('serviceEnquiryLead');

    Route::resource('/admin/program-app', ProgramQueryController::class);
    // Route::get('/admin/program-app/{id}',[ProgramQueryController::class, 'destroy']);

     // ProgramQueryController Routes
    // Route::controller(ProgramQueryController::class)->group(function () {
    //     Route::get('/admin/program-app', 'index');
    //     // Route::get('/admin/program-app/{PeopleQuery}/delete', 'destroy');
    // });

    Route::resource('/admin/people-query', PeopleQueryController::class);

    Route::resource('/admin/certificate', CertificateController::class);

    Route::get('/admin/users', [UserController::class, 'Index'])->name('user_list');
    Route::get('/admin/create/user', [UserController::class, 'UserCreate'])->name('user_create');
    Route::post('/admin/user/submit', [UserController::class, 'UserSubmit'])->name('submit_user');
    Route::get('/admin/user/edit/{id}', [UserController::class, 'UserEdit'])->name('edit_user');
    Route::post('admin/user/update', [UserController::class, 'UserUpdate'])->name('update_user');
    Route::get('/admin/user/delete/{id}', [UserController::class, 'UserDelete'])->name('delete_user');
    Route::any('admin/followup/list', [FollowupController::class, 'AdminFollowupList'])->name('admin_followup_list');
    Route::any('admin/planner/list', [FollowupController::class, 'AdminPlannerList'])->name('admin_planner_list');
    Route::any('/admin/assign/lead', [LeadController::class, 'AssignLead'])->name('admin_assign_lead');
    Route::post('/admin/assign/lead/submit', [LeadController::class, 'AssignLeadSubmit'])->name('admin_assign_lead_submit');
    Route::any('/admin/transfer/lead', [LeadController::class, 'TransferLead'])->name('admin_transfer_lead');
    Route::post('/admin/transfer/lead/to/user', [LeadController::class, 'TransferLeadTo'])->name('admin_lead_transfer_to');
    // Route::get('/admin/home', [HomeController::class, 'index'])->name('home');
    // enquiry ends...
});
// Route::get('/user/login', function(){ echo "hi"; });
Route::get('/user/login', [UserController::class, 'Login'])->name('user_login');
Route::post('/user/auth/check', [UserController::class, 'AuthCheck'])->name('user_auth_check');
Route::get('/user/auth/logout', [UserController::class, 'Logout'])->name('user_logout');
Route::group(["middleware" => ['user'], 'prefix' => 'user'], function () {
    Route::get('dashboard', [UserController::class, 'Dashboard'])->name('user_dashboard');
    Route::any('active/lead', [LeadController::class, 'ActiveLead'])->name('active_lead');
    Route::get('inactive/lead', [LeadController::class, 'InActiveLead'])->name('inactive_lead');
    Route::get('archived/lead', [LeadController::class, 'ArchivedLead'])->name('archived_lead');
    Route::get('add/lead', [LeadController::class, 'AddLead'])->name('add_lead');
    Route::post('lead/submit', [LeadController::class, 'LeadSubmit'])->name('lead_submit');
    Route::post('update/planner', [FollowupController::class, 'UpdatePlanner'])->name('update_planner');
    Route::get('add/followup/{id}', [FollowupController::class, 'AddFollowup'])->name('add_followup');
    Route::post('add/followup/submit', [FollowupController::class, 'FollowupSubmit'])->name('followup_submit');
    Route::get('followup/list/{id}', [FollowupController::class, 'FollowupList'])->name('followup_list');
    Route::any('all/followup/list', [FollowupController::class, 'AllFollowupList'])->name('all_followup_list');
    Route::any('all/planner/list', [FollowupController::class, 'AllPlannerList'])->name('all_planner_list');
    Route::any('search/lead', [FollowupController::class, 'SearchLead'])->name('search_lead');
});