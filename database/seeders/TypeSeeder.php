<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentTypeLookup;

class TypeSeeder extends Seeder
{
    /**
     * Seed the content_type_lookup table with all known compound type IDs.
     *
     * Safe to run multiple times — uses updateOrCreate.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            // ── Global / Shared content (single-digit IDs) ──────────────
            [
                'id'          => 1,
                'name'        => 'Popular Courses / Speak Fearlessly',
                'slug'        => 'popular-courses',
                'category'    => 'content',
                'page_scope'  => null,
                'description' => 'Popular courses tiles on Home page & Speak Fearlessly section on International Languages page',
            ],
            [
                'id'          => 2,
                'name'        => 'Langma Unites the World',
                'slug'        => 'langma-unites',
                'category'    => 'content',
                'page_scope'  => null,
                'description' => 'Langma Unites the World section on Home page',
            ],
            [
                'id'          => 3,
                'name'        => 'Study Destinations',
                'slug'        => 'study-destinations',
                'category'    => 'content',
                'page_scope'  => null,
                'description' => 'Study in Top Higher Education Destinations on Home page',
            ],
            [
                'id'          => 6,
                'name'        => 'Global PR Opportunities',
                'slug'        => 'global-pr-opportunities',
                'category'    => 'content',
                'page_scope'  => null,
                'description' => 'Global Residency Investment Options on PR Investment main page & country listing',
            ],
            [
                'id'          => 7,
                'name'        => 'Work Abroad Destinations',
                'slug'        => 'work-abroad-destinations',
                'category'    => 'destination',
                'page_scope'  => null,
                'description' => 'Explore Work Destinations (country flags) on Work Abroad page',
            ],
            [
                'id'          => 8,
                'name'        => 'Recommended Trips',
                'slug'        => 'recommended-trips',
                'category'    => 'content',
                'page_scope'  => null,
                'description' => 'Recommended Trips section on Cultural Holidays page',
            ],
            [
                'id'          => 9,
                'name'        => 'Explore India',
                'slug'        => 'explore-india',
                'category'    => 'content',
                'page_scope'  => null,
                'description' => 'Explore India section on Cultural Holidays page',
            ],
            [
                'id'          => 10,
                'name'        => 'Career Openings',
                'slug'        => 'career-openings',
                'category'    => 'content',
                'page_scope'  => null,
                'description' => 'Open Opportunities on Career page',
            ],

            // ── Page-scoped FAQs (compound: [page_id][5]) ──────────────
            [
                'id'          => 15,
                'name'        => 'Home FAQ',
                'slug'        => 'home-faq',
                'category'    => 'faq',
                'page_scope'  => 'home',
                'description' => 'FAQ section on the Home page',
            ],
            [
                'id'          => 25,
                'name'        => 'Study Abroad FAQ',
                'slug'        => 'study-abroad-faq',
                'category'    => 'faq',
                'page_scope'  => 'study-abroad',
                'description' => 'FAQ section on the Study Abroad page',
            ],
            [
                'id'          => 35,
                'name'        => 'PR Investment FAQ',
                'slug'        => 'pr-investment-faq',
                'category'    => 'faq',
                'page_scope'  => 'pr-investment',
                'description' => 'FAQ section on PR Investment country pages',
            ],
            [
                'id'          => 45,
                'name'        => 'Language Page FAQ',
                'slug'        => 'language-page-faq',
                'category'    => 'faq',
                'page_scope'  => 'language',
                'description' => 'FAQ section on Language pages',
            ],
            [
                'id'          => 55,
                'name'        => 'Work Abroad FAQ',
                'slug'        => 'work-abroad-faq',
                'category'    => 'faq',
                'page_scope'  => 'work-abroad',
                'description' => 'FAQ section on Work Abroad page',
            ],
            [
                'id'          => 65,
                'name'        => 'Global Assist FAQ',
                'slug'        => 'global-assist-faq',
                'category'    => 'faq',
                'page_scope'  => 'global-assist',
                'description' => 'FAQ section on Global Assist page',
            ],
            [
                'id'          => 75,
                'name'        => 'Language Detail FAQ',
                'slug'        => 'language-detail-faq',
                'category'    => 'faq',
                'page_scope'  => 'language-detail',
                'description' => 'FAQ section on Language Detail pages',
            ],

            // ── Page-scoped content (compound: [page_id][type]) ────────
            [
                'id'          => 36,
                'name'        => 'PR Investment PR Opportunities',
                'slug'        => 'pr-investment-pr-opportunities',
                'category'    => 'content',
                'page_scope'  => 'pr-investment',
                'description' => 'Global PR Opportunities shown on PR Investment country pages',
            ],
            [
                'id'          => 46,
                'name'        => 'Language Page PR Opportunities',
                'slug'        => 'language-pr-opportunities',
                'category'    => 'content',
                'page_scope'  => 'language',
                'description' => 'Global PR by Investment Opportunities shown on Language pages',
            ],
        ];

        foreach ($types as $type) {
            ContentTypeLookup::updateOrCreate(
                ['id' => $type['id']],
                $type
            );
        }
    }
}
