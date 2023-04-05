<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Tables;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Rtl;

use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\UserManagement;

use Illuminate\Http\Request;

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
    return view('frontend.app');
});

Route::get('/admin', function () {
    return redirect('/login');
});

Route::get('/sign-up', SignUp::class)->name('sign-up');
Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/billing', Billing::class)->name('billing');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/tables', Tables::class)->name('tables');
    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
    Route::get('/rtl', Rtl::class)->name('rtl');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');
});


Route::prefix('/advice')->group(function () {
    Route::get('/index', [ContactController::class, 'index'])->name('advice.index');
    Route::get('/create', [ContactController::class, 'create'])->name('advice.create');
    Route::post('/store', [ContactController::class, 'store'])->name('advice.store');
    Route::get('/{id}/edit', [ContactController::class, 'edit'])->name('advice.edit');
    Route::put('/{id}/update', [ContactController::class, 'update'])->name('advice.update');
    Route::get('/{id}/show', [ContactController::class, 'show'])->name('advice.show');
});

Route::prefix('/article')->group(function () {
    Route::get('/index', [ContactController::class, 'index'])->name('article.index');
    Route::get('/create', [ContactController::class, 'create'])->name('article.create');
    Route::post('/store', [ContactController::class, 'store'])->name('article.store');
    Route::get('/{id}/edit', [ContactController::class, 'edit'])->name('article.edit');
    Route::put('/{id}/update', [ContactController::class, 'update'])->name('article.update');
    Route::get('/{id}/show', [ContactController::class, 'show'])->name('article.show');
});

Route::prefix('/hospital')->group(function () {
    Route::get('/index', [ContactController::class, 'index'])->name('hospital.index');
    Route::get('/create', [ContactController::class, 'create'])->name('hospital.create');
    Route::post('/store', [ContactController::class, 'store'])->name('hospital.store');
    Route::get('/{id}/edit', [ContactController::class, 'edit'])->name('hospital.edit');
    Route::put('/{id}/update', [ContactController::class, 'update'])->name('hospital.update');
    Route::get('/{id}/show', [ContactController::class, 'show'])->name('hospital.show');
});

Route::prefix('/illness')->group(function () {
    Route::get('/index', [ContactController::class, 'index'])->name('illness.index');
    Route::get('/create', [ContactController::class, 'create'])->name('illness.create');
    Route::post('/store', [ContactController::class, 'store'])->name('illness.store');
    Route::get('/{id}/edit', [ContactController::class, 'edit'])->name('illness.edit');
    Route::put('/{id}/update', [ContactController::class, 'update'])->name('illness.update');
    Route::get('/{id}/show', [ContactController::class, 'show'])->name('illness.show');
});

Route::prefix('/advice')->group(function () {
    Route::get('/index', [ContactController::class, 'index'])->name('advice.index');
    Route::get('/create', [ContactController::class, 'create'])->name('advice.create');
    Route::post('/store', [ContactController::class, 'store'])->name('advice.store');
    Route::get('/{id}/edit', [ContactController::class, 'edit'])->name('advice.edit');
    Route::put('/{id}/update', [ContactController::class, 'update'])->name('advice.update');
    Route::get('/{id}/show', [ContactController::class, 'show'])->name('advice.show');
});

// Route::prefix('/contact')->group(function () {
//     Route::get('/index', [ContactController::class, 'index'])->name('contact.index');
//     Route::get('/create', [ContactController::class, 'create'])->name('contact.create');
//     Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
//     Route::get('/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
//     Route::put('/{id}/update', [ContactController::class, 'update'])->name('contact.update');
//     Route::get('/{id}/show', [ContactController::class, 'show'])->name('contact.show');
// });
