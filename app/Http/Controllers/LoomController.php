<?php

namespace App\Http\Controllers;

use App\Models\loom;
use Illuminate\Http\Request;

class LoomController extends Controller
{
   
    public function index()
    {
        //
    }

   
    public function create()
    {
        $loomarr=loom::all();
        return view('loom_create',compact('loomarr'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $res=new loom;
        $res->name=$request->input('name');
        $res->email=$request->input('email');
        $res->post=$request->input('post');
        if($request->hasfile('image')){
           $file=$request->file('image');
           $extension=$file->extension();
           $filename=time() .'.'.$extension;
           $file->storeAs('/public/highlights',$filename);
           
       }
         else{
            
           $filename='noimage.png';

           }
           $res->image=$filename;
           $res->save();
           $request->session()->flash('msg','save sucessfully');
           return redirect('loom_create');

    }

   
    public function show(loom $loom)
    {
        return view('loom_show');
    }

    
    public function edit(loom $loom,$id)
    {
        $loom=$loom::find($id);
        return view('loom_edit',compact('loom'));
    }

   
    public function update(Request $request, loom $loom,$id)
    {
       $res=todo::find($id);
               $res->name=$request->input('name');
        $res->email=$request->input('email');
        $res->post=$request->input('post');
        if($request->hasfile('image')){
           $file=$request->file('image');
           $extension=$file->extension();
           $filename=time() .'.'.$extension;
           $file->storeAs('/public/highlights',$filename);
           
       }
         else{
            
           $filename='noimage.png';

           }
           $res->image=$filename;
           $res->save();
           $request->session()->flash('msg','save sucessfully');
           return redirect('loom_create');

    }

    
    public function destroy(loom $loom)
    {
        //
    }
}
