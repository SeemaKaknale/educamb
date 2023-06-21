<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bloglist', function () {
    return view('blog.bloglist');
});
Route::get('/bloggrid', function () {
    return view('blog.bloggrid');
});
Route::get('/bloglarge', function () {
    return view('blog.bloglarge');
});
Route::get('/blogdetails', function () {
    return view('blog.blogdetails');
});
Route::get('/whycanada', function () {
    return view('whycanada');
});
