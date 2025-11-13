<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $banner = Banner::where('status', 1)->first();
        return view('home', compact('banner'));
    }
}
