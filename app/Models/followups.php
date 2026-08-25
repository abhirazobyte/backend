<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class followups extends Model
{
    use HasFactory;

    public function getLeadDetail(){
        return $this->belongsTo(Program::class, 'lead_id', 'id');
    }

    public function getCreatedUser(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }


}
