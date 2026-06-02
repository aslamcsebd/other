<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppsController extends Controller
{
    
    public function cards()
    {
        return view('pages.apps.cards');
    }
    
    public function contacts()
    {
        return view('pages.apps.contacts');
    }
    
    public function draggable_cards()
    {
        return view('pages.apps.draggable-cards');
    }
    
    public function file_manager_details()
    {
        return view('pages.apps.file-manager-details');
    }
    
    public function file_manager_list()
    {
        return view('pages.apps.file-manager-list');
    }
    
    public function file_manager()
    {
        return view('pages.apps.file-manager');
    }
    
    public function full_calendar()
    {
        return view('pages.apps.full-calendar');
    }
    
    public function notifications()
    {
        return view('pages.apps.notifications');
    }
    
    public function treeview()
    {
        return view('pages.apps.treeview');
    }
    
    public function widget_notification()
    {
        return view('pages.apps.widget-notification');
    }
    
    public function widgets()
    {
        return view('pages.apps.widgets');
    }

}
