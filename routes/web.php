<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
//use App\Http\Controllers\UserController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//เพิ่มrouteเรียกใช้UserController
//Route::post('/register', [UserController::class, 'register'])->name('user.register');

//เพิ่มrouteเรียกใช้HomeController
Route::get('/redirects',[HomeController::class,"index"]);
