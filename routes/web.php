<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('content.login');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('content.home');
    })->name('dashboard');
});

// Tenant-specific routes
// Route::middleware(['tenant'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->middleware(['auth', 'verified'])->name('dashboard');

//     Route::middleware(['guest'])->group(function () {
//         Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
//     });
// });

Route::view('/home', 'content.home')->name('home');
Route::view('/login', 'content.login')->name('login');