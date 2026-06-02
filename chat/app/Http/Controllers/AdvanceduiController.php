<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvanceduiController extends Controller
{
    
    public function accordions_collpase()
    {
        return view('pages.advancedui.accordions-collpase');
    }
    
    public function blog_details()
    {
        return view('pages.advancedui.blog-details');
    }

    public function blog_post()
    {
        return view('pages.advancedui.blog-post');
    }

    public function blog()
    {
        return view('pages.advancedui.blog');
    }

    public function carousel()
    {
        return view('pages.advancedui.carousel');
    }

    public function modals_closes()
    {
        return view('pages.advancedui.modals-closes');
    }

    public function offcanvas()
    {
        return view('pages.advancedui.offcanvas');
    }

    public function placeholders()
    {
        return view('pages.advancedui.placeholders');
    }

    public function ratings()
    {
        return view('pages.advancedui.ratings');
    }

    public function search()
    {
        return view('pages.advancedui.search');
    }

    public function sweet_alerts()
    {
        return view('pages.advancedui.sweet-alerts');
    }

    public function swiperjs()
    {
        return view('pages.advancedui.swiperjs');
    }

    public function timeline()
    {
        return view('pages.advancedui.timeline');
    }

    public function userlist()
    {
        return view('pages.advancedui.userlist');
    }

}
