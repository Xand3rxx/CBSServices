<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Frontend\ContactController;
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
    return view('frontend.index');
})->name('index');
Auth::routes([
    'login'    => true,
    'register' => false,
    'logout'   => true,
    'reset'    => false,   // for resetting passwords
    'confirm'  => false,  // for additional password confirmations
    'verify'   => false,  // for email verification
]);
Route::resource('booking',      BookingController::class);
Route::resource('contact',      ContactController::class);
Route::get('cbs-dashboard',     [AdminController::class, 'index'])->name('cbs-dashboard');
Route::get('cbs-bookings',      [AdminController::class, 'bookings'])->name('cbs-bookings');
Route::get('cbs-settings',      [AdminController::class, 'settings'])->name('cbs-settings');
Route::get('cbs-users',         [AdminController::class, 'users'])->name('cbs-users');
Route::patch('cbs-profile-update',[AdminController::class, 'updateProfile'])->name('cbs-profile-update');
Route::put('cbs-password-update',[AdminController::class, 'changePassword'])->name('cbs-password-update');
Route::get('/{page}',           [App\Http\Controllers\Frontend\PageController::class, '__invoke'])
->name('page')
->where('page', 'about|contact|services|fumigation|facility-management|floor-treatment');
