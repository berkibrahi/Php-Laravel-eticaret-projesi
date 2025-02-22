<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

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
    public function products(Request $request){
        $size=$request->size ?? null;
        $color=$request->color ?? null;

        $startPrice=$request->start_price ?? null;

        $endPrice=$request->end_price ?? null;
       $products = Product::where("status", "0")->where(function($q) use($size, $color,$startPrice,$endPrice) {
            if (!empty($size)) {
                $q->where("size", $size);
            }
            if (!empty($color)) {
                $q->where("color", $color);
            }
            if (!empty($startPrice) && $endPrice) {
                $q->whereBetween("price", [$startPrice,$endPrice]);
            }
            return $q;
        })->with("category:id,name,slug");
     $minPrice=$products->min("price");
     $maxPrice=$products->max("price");
     $sizeLists= Product::where("status", "0")->groupBy("size")->pluck("size")->toArray();
     $colors= Product::where("status", "0")->groupBy("color")->pluck("color")->toArray();

        // Sayfalama için paginate metodunu kullanın
        $products = $products->paginate(1);
         $categories=Category::where("cat_ust",null)->withCount("items")->get();
        return view("fronted.pages.products",compact("products","categories","minPrice","maxPrice","sizeLists","colors"));

    }
    public function discountProducts(){

    }
    public function productDetail($slug){

        $product=Product::where("slug",$slug)->first();
        return view("fronted.pages.product",compact("product"));

    }
}
