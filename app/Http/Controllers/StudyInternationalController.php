<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Http\Response;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\Facades\Location;

class StudyInternationalController extends Controller
{
     public function study_international()
    {
        return view('study-international.index');
    }
    
    public function russia_medical()
    {
        return view('study-international.russia-medical');
    }
    
     public function management_france()
    {
        return view('study-international.management-france');
    }
    
     public function switzerland()
    {
        return view('study-international.switzerland');
    }
    
     public function spain()
    {
        return view('study-international.spain');
    }
    
     public function uae()
    {
        return view('study-international.uae');
    }
    public function korea()
    {
        return view('study-international.korea');
    }
    
    
    
#
}
