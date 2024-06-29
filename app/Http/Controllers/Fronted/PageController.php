<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function cart(){
        return view("fronted.pages.cart");
      }
    public function contact(){
      return view("fronted.pages.contact");
    }
    public function about(){
        return view("fronted.pages.about");
    }
    public function products(){
        $products=Product::where("status","0")->paginate(1);
        return view("fronted.pages.products",compact("products"));

    }
    public function discountProducts(){

    }
    public function productDetail($slug){

        $product=Product::where("slug",$slug)->first();
        return view("fronted.pages.product",compact("product"));

    }
}
