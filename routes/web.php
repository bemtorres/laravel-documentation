<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', function () {
    return view('documentation.index');
});
// Route::get('v1/documentacion/items', function () {
//     return view('documentation.items');
// });

Route::get('md', 'MenuControllers@index');