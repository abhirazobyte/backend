<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentType extends Model
{
    use HasFactory;

  //  protected $table   = 'content_types';
   // protected $guarded = [];

    /**
     * Compound type convention:
     *  Single-digit  (1–10) = global/shared content (no page scope)
     *  Two-digit     [page_id][5] = page-scoped FAQ
     *
     *  Page IDs:
     *    1 = Home           → FAQ type 15
     *    2 = Study Abroad   → FAQ type 25
     *    3 = PR Investment  → FAQ type 35
     *    4 = Language Page  → FAQ type 45
     *    5 = Work Abroad    → FAQ type 55
     *    6 = Global Assist  → FAQ type 65
     *    7 = Language Detail→ FAQ type 75
     *
     *  Global types (shared, unchanged):
     *    1  = Popular Courses / Speak Fearlessly
     *    2  = Langma Unites the World
     *    3  = Study Destinations
     *    6  = Global PR Opportunities
     *    7  = Work Abroad Destinations
     *    8  = Recommended Trips
     *    9  = Explore India
     *    10 = Career Openings
     */
    public function types()
    {
        return $this->belongsTo('App\Models\Type', 'type');
    }
}
