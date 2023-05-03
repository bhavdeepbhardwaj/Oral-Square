<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

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
    return view('mainPage');
});


Auth::routes();


// Route::group(['middleware' => 'PreventBackHistory'], function () {
// });


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::post('/submit-form', [AppointmentController::class, 'store']);



// Optimize
Route::get('/Optimize', function () {
    // Config Cache & Clear
    $configcache = Artisan::call('config:cache');
    $configclear = Artisan::call('config:clear');
    // Cache Clear
    $cacheclear = Artisan::call('cache:clear');
    // Route Cache & Clear
    $routeclear = Artisan::call('route:clear');
    $routecache = Artisan::call('route:cache');
    // View Clear
    $viewclear = Artisan::call('view:clear');
    $viewcache = Artisan::call('view:cache');

    echo "Optimize ...!<br>";
    // return redirect()->back()->with("success", "Optimize ...!");
});

// // Migrate Fresh Table
// Route::get('/re-migrate', function () {
//     // Migrate Fresh Table
//     $migrate = Artisan::call('migrate:fresh');
//     echo "Migrate Fresh...!<br>";
// });

// Seeder
// Route::get('/db-seed', function () {
//     // php artisan db:seed
//     $dbseed = Artisan::call('db:seed');

//     echo "DB Seed!<br>";
// });
