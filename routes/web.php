<?php

use App\Http\Livewire\ResetPassword;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\Login;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Register;
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

Route::get('/register', Register::class);


Route::get('/login', Login::class);


Route::get('/profile', Profile::class);

Route::get('/forgot-password', ForgotPassword::class);

Route::get('/reset-password', ResetPassword::class);