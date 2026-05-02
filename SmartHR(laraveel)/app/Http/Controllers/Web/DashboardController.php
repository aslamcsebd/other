<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['types'] = [
            [
                'link'  => url('title-1'),
                'value' => User::count(),
                'title' => 'Admin title 1'
            ],
            [
                'link'  => url('title-3'),
                'value' => User::count(),
                'title' => 'Admin title 3'
            ],
        ];

        return view('pages.dashboard', $data);
    }
}