<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CMSController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('cms.dashboard');
    }

    // public function news()
    // {
    //     return view('cms.news.index');
    // }
}
