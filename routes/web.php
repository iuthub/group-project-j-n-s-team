<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplcationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Schools\PresidentController;
use App\Http\Controllers\Schools\PrivateController;
use App\Http\Controllers\Schools\PublicController;
use App\Http\Controllers\Schools\SchoolsController;
use App\Http\Controllers\Schools\SpecialController;
use App\Http\Controllers\Subjects\SubjectsController;
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
    return view('home');
})->name('home');

// Schools   //
Route::prefix('schools')->group(function () {
    Route::get('/', [SchoolsController::class, 'index'])->name('schools');
    Route::get('/president', [PresidentController::class, 'index'])->name('president');
    Route::get('/public', [PublicController::class, 'index'])->name('public');
    Route::get('/private', [PrivateController::class, 'index'])->name('private');
    Route::get('/special', [SpecialController::class, 'index'])->name('special');
    Route::get('/{school:id}', [SchoolsController::class, 'school_details'])->name('school-details');
});


// Online Application
Route::middleware(['auth'])->group(function () {
    Route::post('onlineapply/', [ApplcationController::class, 'store'])->name('save_application');
    Route::get('onlineapply/', [ApplcationController::class, 'index'])->name('apply');
});

//Admin
Route::middleware(['is_admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    //applications
    Route::get('/editaplly/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::post('/updateapply/{id}', [AdminController::class, 'update'])->name('update');
    Route::delete('/admindelete/{id}', [AdminController::class, 'delete'])->name('delete');

    //schools
    Route::get('/schools', [AdminController::class, 'schools'])->name('admin.schools');
    Route::post('/schools', [AdminController::class, 'add_school'])->name('add-school');
    Route::get('/schools/{school:id}/edit', [AdminController::class, 'edit_school_page'])->name('edit_school');
    Route::post('/schools/{school:id}/update', [AdminController::class, 'update_school'])->name('update_school');
    Route::delete('/schools/{school:id}/delete', [AdminController::class, 'delete_school'])->name('delete_school');

    //users
    Route::get('/users', [AdminController::class, 'userlist'])->name('admin.list');
    Route::get('/users/edit/{user:id}', [AdminController::class, 'useredit'])->name('useredit');
    Route::delete('/users/{user:id}', [AdminController::class, 'userdelete'])->name('userdelete');
    Route::post('/users/{user:id}', [AdminController::class, 'userupdate'])->name('userupdate');

});

 //User
Route::middleware(['user'])->prefix('user')->group(function () {
    //user edit
    Route::get('/usereditaplly/{application:id}', [DashboardController::class, 'edit'])->name('u_edit');
    Route::post('/updateaplly/{application:id}', [DashboardController::class, 'update'])->name('u_update');
    Route::delete('/delete/{application:id}', [DashboardController::class, 'delete'])->name('u_delete');
    Route::get('/delete', [DashboardController::class, 'settings'])->name('settings');
    Route::get('/useredit/{user:id}', [DashboardController::class, 'useredit'])->name('uu_edit');
    Route::post('/update/{user:id}', [DashboardController::class, 'userupdate'])->name('u_userupdate');
    Route::delete('/userdelete/{user:id}', [DashboardController::class, 'userdelete'])->name('uu_delete');
});


// Subjects
Route::prefix('subjects')->group(function () {
    Route::get('/class/{id}', [SubjectsController::class, 'grade'])->name('class');

});

// About us
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');


//Authentication
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/users', [DashboardController::class, 'index'])->name('users.dashboard');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('loginredirect');
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/password-reset', function () {return view('auth.password_reset');})->name('reset_password');
Route::post('/password-reset', [LoginController::class, 'reset_password'])->name('reset');
