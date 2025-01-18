<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontPageController extends Controller
{
    public function welcome()
    {
        return inertia()->render('FrontPages/Welcome');
    }

    public function ourStory()
    {
        return inertia()->render('FrontPages/OurStory');
    }

    public function faqs()
    {
        return inertia()->render('FrontPages/Faqs');
    }

    public function contact()
    {
        return inertia()->render('FrontPages/Contact');
    }

    public function blogs()
    {
        return Inertia::render('FrontPages/Blog');
    }

    public function menu()
    {
        return inertia()->render('FrontPages/Menu');
    }

    public function quoteSubmitted()
    {
        return inertia()->render('FrontPages/QuoteSubmitted');
    }
}
