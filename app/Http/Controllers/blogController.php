<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class blogController extends Controller
{
   public function index(){
    return view('bloglist',['blogs'=>product::all()]);
   }
   public function showblog(){
    return view('blogdetails',['blog'=>product::all()]);
   }
}
