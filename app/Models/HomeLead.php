<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeLead extends Model
{
    use HasFactory;

    protected $table = "home_leads";

    protected $guarded =  [];
}
