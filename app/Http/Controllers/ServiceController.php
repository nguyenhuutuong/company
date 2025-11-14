<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class ServiceController extends VoyagerBaseController
{
    public function show(Request $request, $id){
        dd($request->slug);
        $services = Service::where('slug', $request->slug)->first();
        return view('serves.show', compact('service'));
    }
}
