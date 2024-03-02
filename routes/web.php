<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageTripController;


Route::get('/clear', function(){
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
});

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


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');
	
	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('rtl', function () {
		return view('rtl');
	})->name('rtl');

	Route::get('user-management', function () {
		return view('laravel-examples/user-management');
	})->name('user-management');

	Route::get('tables', function () {
		return view('tables');
	})->name('tables');
	
	Route::get('compagnies', function () {
		return view('compagnies');
	})->name('compagnies');
	Route::get('/guichets', [CounterController::class, 'index']);

	Route::get('/vehicles', [CounterController::class, 'index']);

	

	Route::get('trajets', function () {
		return view('trajets');
	})->name('trajets');

	Route::get('horaires', function () {
		return view('horaires');
	})->name('horaires');

	Route::get('reports', function () {
		return view('reports');
	})->name('reports');

	Route::get('emailsmanager', function () {
		return view('emailsmanager');
	})->name('emailsmanager');

	Route::get('vehicules', function () {
		return view('vehicules');
	})->name('vehicules');

	Route::get('about', function () {
		return view('about');
	})->name('about');


    Route::get('virtual-reality', function () {
		return view('virtual-reality');
	})->name('virtual-reality');

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');
	Route::get('getAvailablUsers', [HomeController::class, 'dashboard'])->name('getAvailablUsers');
    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');

   //manage compagnies
    Route::name('manage.')->prefix('manage')->group(function(){
	
    Route::post('counter', 'CounterController@counterStore')->name('counter.store');
    Route::post('counter/update/{id}', 'CounterController@counterUpdate')->name('counter.update');
    Route::post('counter/active-disable', 'CounterController@counterActiveDisabled')->name('counter.active.disable');
        });
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');