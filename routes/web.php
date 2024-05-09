<?php

use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/contact-us', function () {
    return view('contact');
});
Route::get('/about-us', function () {
    return view('about');
});

Route::get('/test', function () {

    $getService = Service::with('sub_services')->first();
    // $getService = Service::with('sub_services.product')->get();

    dd($getService->sub_services[0]->products);


});
