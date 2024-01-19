<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\AuthControllerUser;
use App\Http\Controllers\MyBackEnd;
use App\Http\Controllers\uploader;
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

//Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::get('register', [AuthController::class, 'register'])->name('registration');
    Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
    Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
    Route::post('userchecklogin', [AuthControllerUser::class, 'index_user'])->name('userchecklogin');
    Route::get('signup', [MyBackEnd::class, 'view_signup'])->name('view.signup');
    Route::get('loginuser', [MyBackEnd::class, 'loginuser'])->name('loginuser');
    Route::get('subscribeuserpage', [MyBackEnd::class, 'subscribeuserpage'])->name('subscribeuserpage');
    // Route::get('mainpageuser', [MyBackEnd::class, 'mainpageuser'])->name('mainpageuser');

//});

//Route::group(['middleware' => 'auth'], function () {

    Route::get('historymain', [MyBackEnd::class, 'view_historymain'])->name('view.historymain');

    Route::get('mainpageuser/{AccountNo}', [MyBackEnd::class, 'mainpageuser'])->name('mainpageuser');
    Route::get('mainpage', [MyBackEnd::class, 'view_mainpage'])->name('view.mainpage');
    Route::get('supportpage/{AccountNo}', [MyBackEnd::class, 'view_supportpage'])->name('supportpage');
    Route::get('history/{AccountNo}', [MyBackEnd::class, 'view_history'])->name('view.history');
    Route::get('settingpage', [MyBackEnd::class, 'view_profile'])->name('view.profile');
    Route::get('user', [MyBackEnd::class, 'view_user'])->name('view.user');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('paymentpage/{AccountNo}', [MyBackEnd::class, 'view_paymentpage'])->name('view.paymentpage');
    Route::get('adduser', [MyBackEnd::class, 'view_adduser'])->name('view.adduser');
    Route::get('edituser/{id}', [MyBackEnd::class, 'edituser'])->name('edituser');
    Route::get('account/{AccountNo}', [MyBackEnd::class, 'account'])->name('account');
    //add
    Route::post('add', [uploader::class, 'add'])->name('add');
    Route::get('delete/{id}', [uploader::class, 'delete'])->name('delete');
    Route::post('update/{id}', [MyBackEnd::class, 'update'])->name('update');
//});
// Route::get('login', [MyBackEnd::class, 'view_login'])->name('view.login');