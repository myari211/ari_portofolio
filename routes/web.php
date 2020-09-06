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

Route::get('/', 'CompanyProfile@index');
Route::get('/about', 'CompanyProfile@about');
Route::get('/education', 'CompanyProfile@education');
Route::get('/skills', 'CompanyProfile@skill');
