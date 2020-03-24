<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function about()
    {
    	return view('about');
    }
    public function services()
    {
    	return view('services');
    }

    public function contact()
    {
    	return view('contact');
    }

    public function pos()
    {
        return view('pos');
    }
    
}
