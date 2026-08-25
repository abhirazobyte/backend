<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $table = 'program_query';

    protected $guarded =  [];

    public function getAllFollowup(){
        return $this->hasMany(followups::class, 'lead_id')->where('status',1);
    }
}
