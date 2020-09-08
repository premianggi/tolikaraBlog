<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view("website.home");
});
Route::get('/post', function () {
    return view("website.post");
});
Route::get('/about', function () {
    return view("website.about");
});
Route::get('/category', function () {
    return view("website.category");
});
Route::get('/contact', function () {
    return view("website.contact");
});

//Halaman Admin

Route::get('/test', function () {
    return view("admin.dashboard.index");
});
