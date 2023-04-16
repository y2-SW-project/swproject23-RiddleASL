<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\User\WordController as UserWordController;
use App\Http\Controllers\Admin\SignController as AdminSignController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\WordController as AdminWordController;

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
})->name('welcome');

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
})->name('home.index');

Route::get('/search',[SearchController::class, 'search']);
Route::get('/result',[SearchController::class, 'result']);

Route::group(['middleware'=>'auth'], function (){
    //* User Profile Settings
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::resource('/user/words', UserWordController::class)->only(['index', 'show'])->names('user.words');

Route::resource('/words', AdminWordController::class)->names('words');
Route::resource('/signs', AdminSignController::class)->except(['create'])->names('signs');
Route::get('/create/{word_id}', [AdminSignController::class, 'create'])->name('signs.create');

Route::resource('/users', UsersController::class)->middleware('auth')->names('admin.users');

require __DIR__.'/auth.php';

Auth::routes();
