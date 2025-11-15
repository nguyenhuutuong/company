<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use App\Models\Service;

class ServiceController extends VoyagerBaseController
{
    public function show(Request $request, $id){
        
        if($request->slug == 'all'){
            $services = Service::where('is_featured', 1)->paginate(1);
            return view('services.index', compact('services'));
        }
        $service = Service::where('slug', $request->slug)
                            ->where('is_featured', 1)->first();
        return view('services.show',compact('service'));
    }
}
