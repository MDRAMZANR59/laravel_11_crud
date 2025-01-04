<?php

namespace App\Http\Controllers;
use App\Models\product;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('form');
    }
    public function store(Request $request){
        $validate=$request->validate([
            'name'=>'required',
                // Validated phone and image for nullabale
            'phone' => ['required', 'regex:/^\d+$/'],
            'image'=>'nullable|image|mimes:jpeg,jpg,png,gif|max:2048'
        ]);
        $imagename=null;
       if($request->image){
        $imagename=time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imagename);
       };
        $model=new product();
        $model->name=$request->name;
         // Validated
        $model->phone = preg_replace('/\D/', '', $request->input('phone'));
        $model->image=$imagename;
        $model->save();

        return redirect()->route('listdata')->with('success','Data Save Successfull');
    }
    public function edit($id){
        $dbdata=product::findOrFail($id);
        return view('editdetails',['olddatas'=>$dbdata]);
    }
    public function showlist(){
        return view('homepage',['datas'=>product::all()]);
    }
    public function update($id, Request $request){
        $validate=$request->validate([
            'name'=>'required',
              // Validated phone and image for nullabale
            'phone' => ['required', 'regex:/^\d+$/'],
            'image'=>'nullable|image|mimes:jpeg,jpg,png,gif|max:2048'
        ]);
        $model=product::findOrFail($id);
        // $model=new product();
        $model->name=$request->name;
        $model->phone = preg_replace('/\D/', '', $request->input('phone'));

        if($request->image){
            $imagename=time().'.'.$request->image->extension();
            $request->image->move(public_path('images'),$imagename);
            $model->image=$imagename;
           };
        $model->save();

        return redirect()->route('listdata')->with('update','Data Update Successfull');
    }
    public function delete($id){
        $dtbase=product::findOrFail($id);
        $dtbase->delete();
        return redirect()->route('listdata')->with('deleted','Data Deleted Successfull');
    }
}
