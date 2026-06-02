<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    
    public function landing_page()
    {
        return view('pages.landingpage.landing-page');
    }

}
