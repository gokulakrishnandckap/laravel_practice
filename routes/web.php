<?php

use App\Http\Controllers\welcomeController;
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

Route::get('/',[welcomeController::class, 'index']);


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/home', function () {
//     return view('home', ['name'=> "Gokul"]);
// });

// Route::get('/about', function () {
//     return view('about');
// });


// Route::get('/homes', function () {
//     // return view('welcome');
//     return "<h1>Gokul hello</h1>";
// });





