<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Slider;
use App\Post;
use App\Cat;
use Storage;

class Front extends Controller
{
    public function index()
    {
        $post = Post::all();
        $cat = Cat::all();
        $slider = Slider::all();
        $brand = Brand::all();
        return view('welcome',['title'=>'Travel'],
            compact('brand','slider','cat','post'));
    }
}
