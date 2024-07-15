<?php

use App\Livewire\Quiz;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\GoogleSocialiteController;

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

Route::view('/', 'welcome')->name('main');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('interest-analyst', Quiz::class)->middleware(['auth', 'verified'])
->name('quiz');

Route::view('/خدمة-الارشاد-المهني-للموظفين', 'employee_ershad')
->name('employee_ershad');
Route::view('/خدمة-الارشاد-المهني-للباحثين-عن-عمل', 'customer_ershad')
->name('customer_ershad');
Route::view('/خدمة-برامج-التوجيه-والارشاد-للمنشات', 'company_ershad')
->name('company_ershad');

Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle'])->name('auth.google');  // redirect to google login
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);  

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
