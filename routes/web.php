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
    return view('welcome');
});

// Route for Category
Route::get('category-list','App\Http\Controllers\CategoryController@categoryList')->name('categoryList');
Route::get('add-new-category','App\Http\Controllers\CategoryController@addNewCategory')->name('addNewCategory');
Route::post('save-category','App\Http\Controllers\CategoryController@saveCategory')->name('saveCategory');