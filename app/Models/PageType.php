<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageType extends Model
{
    use HasFactory;

    protected $table = "page_types";
    //protected $fillable = ["pagesType"];

    protected $guarded =  [];

    public function content_type(){

        return $this->hasMany('\App\Models\ContentType','type');

    }
}
