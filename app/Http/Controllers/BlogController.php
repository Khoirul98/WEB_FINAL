<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        
        $data = \App\Posts::orderBy('created_at','desc')->get();
        $datam = \App\Postms::orderBy('created_at','desc')->get();
        return view('template_blog.home',compact('data',('datam')));
        
    }
}
