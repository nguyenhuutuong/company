<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $banner = Banner::where('status', 1)->first();
        $services = Service::where('is_featured', 1)->get();
        // dd($services);
        return view('home', compact('banner', 'services'));
    }
}
