<?php

use App\Http\Controllers\CrudController;
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

Route::view('/','welcome',['name'=>'mahmoud']);
Route::get('login',function(){
    return 'sory you cant access to this';
})->name('login');
Route::namespace('front')->group(function(){
    
    Route::get('ahm','userController@show');
});
Route::resource('crud','CrudController');
Route::get('loading1','front\userController@show')->name('loading');
Route::get('about',function(){
    return view('about');
})->name('about');
Route::get('main',function(){
    return view('main');
})->name('main');
Route::get('pro',function(){
    return view('pro');
})->name('pro')->middleware('age');
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
