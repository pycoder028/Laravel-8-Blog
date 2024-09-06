<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContentController extends Controller
{
    public function index(){
        $content = Content::find(1);
        return view('admin.content.index',compact('content'));
    }

    public function saveContent(Request $request){
        $validator = Validator::make($request->all(),[
            'S_blog' => 'nullable',
            's_mission' => 'nullable',
            'S_vision' => 'nullable',
            'f_blog' => 'nullable',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $content = Content::where('id','1')->first();
        if($content){
            $content->S_blog = $request->S_blog;
            $content->s_mission = $request->s_mission;
            $content->S_vision = $request->S_vision;
            $content->f_blog = $request->f_blog;
    
            $content->save();
    
            return redirect('admin/contents')->with('message','Content Updated');
        }else{
            $content = new Content;
            $content->S_blog = $request->S_blog;
            $content->s_mission = $request->s_mission;
            $content->S_vision = $request->S_vision;
            $content->f_blog = $request->f_blog;
    
            $content->save();
    
            return redirect('admin/contents')->with('message','Setting Added');
        }

    }

}
