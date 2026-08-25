<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramQuery extends Model
{
    use HasFactory;

    protected $table = 'program_query';
    //protected $table = 'program_query';

    protected $guarded =  [];
}
