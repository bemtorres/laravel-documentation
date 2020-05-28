<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('v1/documentacion', function () {
    return view('documentation.index');
});
Route::get('v1/documentacion/items', function () {
    return view('documentation.items');
});

Route::get('v1/documentacion/md', function () {
    return view('markdown.index');
});