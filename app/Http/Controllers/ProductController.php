<?php

namespace App\Http\Controllers;
use App\Models\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('form');
    }
    public function store(Request $request){
        $validate=$request->validate([
            'name'=>'required',
            'phone'=>'required',
            'image'=>'mimes:png,jpg'
        ]);
        $imagename=null;
       if($request->image){
        $imagename=time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imagename);
       };
        $model=new product();
        $model->name=$request->name;
        $model->phone=$request->phone;
        $model->image=$imagename;
        $model->save();

        return redirect()->route('listdata')->with('success','Data Save Successfull');
    }
    public function edit($id){
        $dbdata=product::findOrFail($id);
        return view('editdetails',['olddatas'=>$dbdata]);
    }
    public function showlist(){
        return view('datalist',['datas'=>product::all()]);
    }
    public function update($id, Request $request){
        $validate=$request->validate([
            'name'=>'required',
            'phone'=>'required',
            'image'=>'mimes:png,jpg'
        ]);
        $model=product::findOrFail($id);
        // $model=new product();
        $model->name=$request->name;
        $model->phone=$request->phone;

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
