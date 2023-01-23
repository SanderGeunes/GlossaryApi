<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/////////////////////////////WORDS///////////////////////////////////////
// one route to rule them all
Route::get('/words/{category}', function ($category) {
     // return DB::select('SELECT * FROM words WHERE category_id = {$category}'); 
     return DB::table('words')->where('category_id', $category)->get();
});



