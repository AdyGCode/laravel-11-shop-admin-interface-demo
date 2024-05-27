<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    //
    public function home()
    {
        return view('pages.welcome');
    }

    public function adminDashboard()
    {
        return view('pages.admin-dashboard');
    }

    public function contactUs()
    {
        return view('pages.contact-us');
    }
}
