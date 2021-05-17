<?php

use App\Http\Livewire\ResetPassword;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\Login;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Register;
use App\Models\User;
use App\Notifications\MailResetPasswordToken;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

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

Route::redirect('/', '/login');

Route::get('/register', Register::class)->name('register');

Route::get('/login', Login::class)->name('login');

Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');
Route::middleware('auth')->group(function () {
    Route::get('/profile', Profile::class)->name('profile');
});

Route::get('/reset-password/{token}', ResetPassword::class)->name('reset-password');
Route::get('/reset-password', ResetPassword::class)->name('reset-password');
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/transactions', function () {
    return view('transactions');
});
Route::get('/bootstrap-tables', function () {
    return view('bootstrap-tables');
});
Route::get('/lock', function () {
    return view('lock');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/500', function () {
    return view('500');
});
Route::get('/buttons', function () {
    return view('components.buttons');
});
Route::get('/notifications', function () {
    return view('components.notifications');
});
Route::get('/forms', function () {
    return view('components.forms');
});
Route::get('/modals', function () {
    return view('components.modals');
});
Route::get('/typography', function () {
    return view('components.typography');
});

Route::get('mail', function(){
    $order = App\Models\User::find(1);

    return (new ResetPassword($order))->toMail($order->user);
});