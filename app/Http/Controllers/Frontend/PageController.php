<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __invoke()
    {
        return view('frontend.'.request()->segment(1));
    }
}
