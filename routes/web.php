<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Fronted\PageController;
use App\Http\Controllers\Fronted\PageHomeController;
use Illuminate\Support\Facades\Route;
Route::group(["middleware"=>"sitesetting"],function(){
    Route::get('/', [PageHomeController::class,"index"])->name("index");
    Route::get('/about', [PageController::class,"about"])->name("about");
    Route::get('/contact', [PageController::class,"contact"])->name("contact");
    Route::post('/contact/save', [AjaxController::class,"contactSave"])->name("contactSave");
    Route::get('/erkek-giyim', [PageController::class,"products"])->name("men_products");
    Route::get('/indirimdekiler', [PageController::class,"discountProducts"])->name("discountProducts");
    Route::get('/kadin-giyim', [PageController::class,"products"])->name("women_products");
    Route::get('/cocuk-giyim', [PageController::class,"products"])->name("children_products");
    Route::get('/products', [PageController::class,"products"])->name("products");
    Route::get('/product/{slug}', [PageController::class,"ProductDetail"])->name("productDetail");
    Route::get('/cart', [PageController::class,"cart"])->name("cart");

});

