<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('frontend/home');
});
Route::get('/about', function () {
    return view('frontend/about');
});
Route::get('/service', function () {
    return view('frontend/service');
});
Route::get('/price', function () {
    return view('frontend/price');
});
Route::get('/testimonial', function () {
    return view('frontend/testimonial');
});

Route::get('/update_homepage', function () {
    return view('dashboard/update_homepage');
});
Route::get('/update_aboutpage', function () {
    return view('dashboard/update_aboutpage');
});
Route::get('/update_pricepage', function () {
    return view('dashboard/update_pricepage');
});
Route::get('/update_servicepage', function () {
    return view('dashboard/update_servicepage');
});
Route::get('/update_testimonialpage', function () {
    return view('dashboard/update_testimonialpage');
});
