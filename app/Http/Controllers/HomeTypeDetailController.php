<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use App\Models\HomeTypeDetail;

class HomeTypeDetailController extends VoyagerBaseController
{
    public function userIndex(Request $request) {
        
        if($request->slug == 'all'){
            $projects = HomeTypeDetail::where('is_featured', 1)->paginate(6);
            return view('projects.index', compact('projects'));
        }
        if($request->status == 'hoan-thanh' || $request->status == 'thi-cong'){
            $status = $request->status == 'hoan-thanh' ? 1 : 0;
            $projects = HomeTypeDetail::where('status', $status)
                                        ->where('is_featured', 1)->paginate(6);      
            return view('projects.index', compact('projects'));
        }

        $projects = HomeTypeDetail::where('home_type_id', $request->id)->where('is_featured', 1)->paginate(6);
        return view('projects.index', compact('projects'));

    }

    public function userShow(Request $request, $id){
        if($request->slug == 'all'){
            $home_types = HomeType::where('is_featured', 1)->paginate(6);
            return view('models.index', compact('home_types'));
        }
        $home_type = HomeType::where('slug', $request->slug)
                            ->where('is_featured', 1)->first();
        return view('projects.show',compact('home_type'));
    }
}
