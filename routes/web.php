<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\Books;
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


// Registration page 
Route::get('/', function () {
    return view('welcome');
});
Route::post("/",[Users::class,'index']);
   
// login page 
Route::get('/login', function () {
    return view('login');
});
Route::post("login",[Users::class,'login']);

// logout page 
Route::get('/logout',function(){
    if(session()->has('user')){
        session()->pull('user',null);
    }
    return redirect('login');
});


//home page 
Route::get('/home', function(){
    if(session()->has('user')){
        return view('home');
    }
    return view('login');
});
Route::post("home",[Books::class,'bookstore']);


//Book List page
Route::get("books",[Books::class,'booklist']);

//delete books
Route::get("delete/{id}",[Books::class,'delete']);

//edit books
Route::get('edit/{id}',[Books::class,'showData']);

Route::post('edit',[Books::class,'Update']);
