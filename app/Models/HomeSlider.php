<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use HasFactory;

    protected $table = "home_sliders";

    // protected $fillable = ["pages"];
    protected $guarded =  [];

    // public function page_type(){
    //     return $this->belongsTo('\App\Models\PageType','type');
    // }
}
