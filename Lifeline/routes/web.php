<?php

use App\Http\Controllers\Advice;
use App\Http\Controllers\AdviceController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\IllnessController;
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
    return view('frontend.main');
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
    Route::get('/index', [AdviceController::class, 'index'])->name('advice.index');
    Route::get('/create', [AdviceController::class, 'create'])->name('advice.create');
    Route::post('/store', [AdviceController::class, 'store'])->name('advice.store');
    Route::get('/{id}/edit', [AdviceController::class, 'edit'])->name('advice.edit');
    Route::put('/{id}/update', [AdviceController::class, 'update'])->name('advice.update');
    Route::get('/{id}/show', [AdviceController::class, 'show'])->name('advice.show');
});

Route::prefix('/article')->group(function () {
    Route::get('/index', [ArticleController::class, 'index'])->name('article.index');
    Route::get('/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/store', [ArticleController::class, 'store'])->name('article.store');
    Route::get('/{id}/edit', [ArticleController::class, 'edit'])->name('article.edit');
    Route::put('/{id}/update', [ArticleController::class, 'update'])->name('article.update');
    Route::get('/{id}/show', [ArticleController::class, 'show'])->name('article.show');
});

Route::prefix('/hospital')->group(function () {
    Route::get('/index', [HospitalController::class, 'index'])->name('hospital.index');
    Route::get('/create', [HospitalController::class, 'create'])->name('hospital.create');
    Route::post('/store', [HospitalController::class, 'store'])->name('hospital.store');
    Route::get('/{id}/edit', [HospitalController::class, 'edit'])->name('hospital.edit');
    Route::put('/{id}/update', [HospitalController::class, 'update'])->name('hospital.update');
    Route::get('/{id}/show', [HospitalController::class, 'show'])->name('hospital.show');
});

Route::prefix('/illness')->group(function () {
    Route::get('/index', [IllnessController::class, 'index'])->name('illness.index');
    Route::get('/create', [IllnessController::class, 'create'])->name('illness.create');
    Route::post('/store', [IllnessController::class, 'store'])->name('illness.store');
    Route::get('/{id}/edit', [IllnessController::class, 'edit'])->name('illness.edit');
    Route::put('/{id}/update', [IllnessController::class, 'update'])->name('illness.update');
    Route::get('/{id}/show', [IllnessController::class, 'show'])->name('illness.show');
});

// Route::prefix('/advice')->group(function () {
//     Route::get('/index', [ContactController::class, 'index'])->name('advice.index');
//     Route::get('/create', [ContactController::class, 'create'])->name('advice.create');
//     Route::post('/store', [ContactController::class, 'store'])->name('advice.store');
//     Route::get('/{id}/edit', [ContactController::class, 'edit'])->name('advice.edit');
//     Route::put('/{id}/update', [ContactController::class, 'update'])->name('advice.update');
//     Route::get('/{id}/show', [ContactController::class, 'show'])->name('advice.show');
// });

Route::prefix('/hospital')->group(function () {
    Route::get('/bir', [homeController::class, 'bir'])->name('bir');
    Route::get('/bpkhs', [homeController::class, 'bpkhs'])->name('bpkhs');
    Route::get('/chitwan', [homeController::class, 'chitwan'])->name('chitwan');
    Route::get('/maharaj', [homeController::class, 'maharaj'])->name('maharaj');
    Route::get('/narayani', [homeController::class, 'narayani'])->name('narayani');
    Route::get('/nepalgunj', [homeController::class, 'nepalgunj'])->name('nepalgunj');
});


// Route::prefix('/contact')->group(function () {
//     Route::get('/index', [ContactController::class, 'index'])->name('contact.index');
//     Route::get('/create', [ContactController::class, 'create'])->name('contact.create');
//     Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
//     Route::get('/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
//     Route::put('/{id}/update', [ContactController::class, 'update'])->name('contact.update');
//     Route::get('/{id}/show', [ContactController::class, 'show'])->name('contact.show');
// });
