<?php

namespace App\Http\Controllers\Fronted;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;


class PageHomeController extends Controller
{
    public function index(){
         $slider=Slider::where("status","1")->get();
         $title="anasayfa";
         $categories=Category::where("status","1")->get();
        return view("fronted.pages.index",compact("slider","title","categories"));
    }
}
