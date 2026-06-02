<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function about()
    {
        return view('pages.pages.about');
    }
    
    public function chat()
    {
        return view('pages.pages.chat');
    }
    
    public function check_out()
    {
        return view('pages.pages.check-out');
    }
    
    public function editprofile()
    {
        return view('pages.pages.editprofile');
    }
    
    public function emptypage()
    {
        return view('pages.pages.emptypage');
    }
    
    public function error404()
    {
        return view('pages.pages.error404');
    }
    
    public function error500()
    {
        return view('pages.pages.error500');
    }
    
    public function error501()
    {
        return view('pages.pages.error501');
    }
    
    public function faq()
    {
        return view('pages.pages.faq');
    }
    
    public function forgot()
    {
        return view('pages.pages.forgot');
    }
    
    public function gallery()
    {
        return view('pages.pages.gallery');
    }
    
    public function invoice()
    {
        return view('pages.pages.invoice');
    }
    
    public function lockscreen()
    {
        return view('pages.pages.lockscreen');
    }
    
    public function mail_compose()
    {
        return view('pages.pages.mail-compose');
    }
    
    public function mail_read()
    {
        return view('pages.pages.mail-read');
    }
    
    public function mail_settings()
    {
        return view('pages.pages.mail-settings');
    }
    
    public function mail()
    {
        return view('pages.pages.mail');
    }
    
    public function pricing()
    {
        return view('pages.pages.pricing');
    }
    
    public function product_cart()
    {
        return view('pages.pages.product-cart');
    }
    
    public function product_details()
    {
        return view('pages.pages.product-details');
    }
    
    public function products()
    {
        return view('pages.pages.products');
    }
    
    public function profile()
    {
        return view('pages.pages.profile');
    }
    
    public function reset()
    {
        return view('pages.pages.reset');
    }
    
    public function settings()
    {
        return view('pages.pages.settings');
    }
    
    public function signin()
    {
        return view('pages.pages.signin');
    }
    
    public function signup()
    {
        return view('pages.pages.signup');
    }
    
    public function todotask()
    {
        return view('pages.pages.todotask');
    }
    
    public function underconstruction()
    {
        return view('pages.pages.underconstruction');
    }
    
    public function wish_list()
    {
        return view('pages.pages.wish-list');
    }
    
}
