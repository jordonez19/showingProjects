<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes(['register' => false]);
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'MessageController@store')->name('messages');
Route::resource('/project', 'ProjectController')->names('projects');
Route::view('/', 'home')->name('home');

































Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
