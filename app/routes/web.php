<?php

use App\Controllers\HomeController;
use App\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
Route::get('/courses', function () {
    return view('courses');
})->name('courses');
Route::get('/enroll', function () {
    return view('enroll');
})->name('enroll');
Route::get('/login', function () {
    return view('login');
})->name('login');