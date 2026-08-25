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

class LandingController extends Controller
{
     public function arabic()
    {
        
        return view('landing.arabic');
    }
    
    public function chinese()
    {
        
        return view('landing.chinese');
    }
    
    public function english()
    {
        
        return view('landing.english');
    }
    
    public function french()
    {
        
        return view('landing.french');
    }
    
    public function german()
    {
        
        return view('landing.german');
    }
    
    public function asian_page()
    {
        return view('new-landing-pages.asian');
    }

    public function european_page()
    {
        return view('new-landing-pages.european');
    }
    
    public function italian()
    {
        
        return view('landing.italian');
    }
    
    public function japanese()
    {
        
        return view('landing.japanese');
    }
    
    public function korean()
    {
        
        return view('landing.korean');
    }
    
    public function russian()
    {
        
        return view('landing.russian');
    }
    
    public function spanish()
    {
        
        return view('landing.spanish');
    }
    
    public function french_page()
    {
    return view('landing-page.french');
    }
    
    //  public function japanese_page()
    // {
    // return view('landing-page.japanese');
    // }
     public function japanese_page()
    {
    return view('new-landing-pages.japanese');
    }
    
     public function chinese_page()
    {
    return view('landing-page.chinese');
    }
    
     public function german_page()
    {
        return view('new-landing-pages.german');
    }
    
     public function japanese_pages()
    {
    return view('new-landing-pages.japanese');
    }
    
     public function korean_page()
    {
    return view('landing-page.korean');
    }
    
      public function english_page()
    {
    return view('landing-page.english');
    }
    
     public function dutch_page()
    {
    return view('landing-page.dutch');
    }
    
    public function spanish_page()
    {
    return view('landing-page.spanish');
    }
    
     public function arabic_page()
    {
    return view('landing-page.arabic');
    }
    
     public function italian_page()
    {
    return view('landing-page.italian');
    }
    
     public function russian_page()
    {
    return view('landing-page.russian');
    }
    
    
   


}
