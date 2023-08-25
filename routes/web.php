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

Route::get('/Gallery', function (){
return view('gallery');
});

Route::get('/Collection', function (){
    return view('collecton');
});

Route::get('/Blog', function (){
    return view('blog');
});

Route::get('/About-us', function (){
    return view('about');
});

Route::get('/Contact-us', function (){
    return view('contact');
});

Route::get('/Terms-Of-Conditions', function (){
    return view('terms&condition');
});

Route::get('/Privacy-Policy', function (){
    return view('privcryandpolicy');
});


Route::get('/dashboard-home', function (){
    return view('dhome');
});

Route::get('/dashboard-home/addcatagory', function (){
    return view('dashboardviews.Add catagroy.addcata');
});
Route::get('/dashboard-home/listcatagory', function (){
    return view('dashboardviews.Add catagroy.listcata');
});