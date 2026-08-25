<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sunsvillage;
 
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ThesunvillageController extends Controller {
    
     public function index()
    {
        $datas = Sunsvillage::orderBy('id', 'desc')->get();
        return view('backend.leads.thesunvillage', compact('datas'));
    }

     
}
