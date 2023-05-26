<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view("home");
    }

    public function aboutus(){
        return view("about-us");
    }

    public function contactus(){
        return view("contact-us");
    }

    public function demo(){
        return view("demo");
    }

    public function career(){
        return "about carr";
    }

    public function faq(){
        return view("faq");
    }

    public function download(){
        return view("download-app-page");
    }

    public function app(){
        return redirect()->away('https://app.icefame.com');;
    }
}
