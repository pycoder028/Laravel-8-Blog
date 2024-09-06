<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gettouch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GettouchController extends Controller
{
    public function index(){
        $gettouch = Gettouch::find(1);
        return view('admin.gettouch.index', compact('gettouch'));
    }

    public function saveTouch(Request $request){

        $validator = Validator::make($request->all(),[
            'name' => 'nullable',
            'slug' => 'nullable',
            'description' => 'nullable'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $gettouch = Gettouch::where('id','1')->first();
        if($gettouch){
            $gettouch->name = $request->name;
            $gettouch->slug = $request->slug;
            $gettouch->description = $request->description;
    
            $gettouch->save();
    
            return redirect('admin/gettouch')->with('message','Content Updated');
        }else{
            $gettouch = new Gettouch;
            $gettouch->name = $request->name;
            $gettouch->slug = $request->slug;
            $gettouch->description = $request->description;
    
            $gettouch->save();
    
            return redirect('admin/gettouch')->with('message','Setting Added');
        }

    }

}
