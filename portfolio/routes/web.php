<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\portfolio;

Route::get('/',[portfolio::class,'home']);
Route::get('/home',[portfolio::class,'home']);
Route::get('/about',[portfolio::class,'about']);
Route::get('/portfolio',[portfolio::class,'portfolio']);
Route::get('/contact',[portfolio::class,'contact']);
Route::post('/tambah-pesan',[portfolio::class,'tambahPesan']);
