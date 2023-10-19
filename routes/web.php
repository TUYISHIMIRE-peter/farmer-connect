<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/data', [ProfileController::class, 'displayUsers'])->name('data');
});

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/base', function () {
    return view('admin.base');
});

Route::post('/videos/upload', 'App\Http\Controllers\VideoController@upload')->name('videos.upload');
Route::get('/video', 'App\Http\Controllers\VideoController@index')->name('video');



Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/add_video', function () {
    return view('admin.video');
})->name('add_video');


Route::get('/admin-login', function () {
    return view('admin.admin_login');
})->name('admin-login');


Route::get('/calendar', function () {
    return view('admin.calendar');
})->name('calendar');



// Route::get('/experience', function () {
//     return view('admin.embed-video');
// })->name('experience');



Route::get('/land', function () {
    return view('landing');
})->name('Home');



Route::get('/login', function () {
    return view('login');
})->name('login');



Route::get('/project', function () {
    return view('admin.projects-list');
})->name('project-list');


Route::get('/register1', function () {
    return view('register');
})->name('register');


Route::get('/user-profile', function () {
    return view('admin.user_profile');
})->name('user-profile');



require __DIR__.'/auth.php';
