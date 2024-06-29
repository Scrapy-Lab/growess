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



Route::get('/gmb-optimization', function () {
    return view('gmb-optimization');
})->name('gmb-optimization');

Route::get('/seo', function () {
    return view('seo');
})->name('seo');


Route::get('/smm', function () {
    return view('smm');
})->name('smm');


Route::get('/content-writting', function () {
    return view('content-writting');
})->name('content-writting');


Route::get('/email-marketing', function () {
    return view('email-marketing');
})->name('email-marketing');

Route::get('/graphic-design', function () {
    return view('graphic-design');
})->name('graphic-design');

Route::get('/test', function () {

    $getService = Service::with('sub_services')->first();
    // $getService = Service::with('sub_services.product')->get();

    dd($getService->sub_services[0]->products);
});
