<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function projects()
    {
        return view('frontend.projects');
    }

    public function projectDetails()
    {
        return view('frontend.project-details');
    }

    public function products()
    {
        return view('frontend.products');
    }

    public function productDetails()
    {
        return view('frontend.product-details');
    }

    public function showroom()
    {
        return view('frontend.showroom');
    }

    public function factory()
    {
        return view('frontend.factory');
    }

    public function events()
    {
        return view('frontend.events');
    }

    public function news()
    {
        return view('frontend.news');
    }

    public function eventDetails()
    {
        return view('frontend.event-details');
    }

    public function newsDetails()
    {
        return view('frontend.news-details');
    }

}
