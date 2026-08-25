<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $table = "pages";

    //protected $fillable = ["pages"];
    protected $guarded =  [];

    public function page_type(){
        return $this->belongsTo('\App\Models\PageType','type');
    }
}
