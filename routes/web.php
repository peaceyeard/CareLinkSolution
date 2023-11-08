<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\ProfileController;

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return redirect('tenants');
    })->name('dashboard');

    Route::view('/profile', 'profile')->name('profile');
    // Route::get('/profile', [ProfileController::class, 'edit']->name('profile.edit'));
    // Route::patch('/profile', [ProfileController::class, 'update']->name('profile.update'));
    // Route::delete('/profile', [ProfileController::class, 'destroy']->name('profile.destroy'));

    Route::resource('tenants', TenantController::class);
});

require __DIR__.'/auth.php';
