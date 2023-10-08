<?php

use App\Http\Controllers\ImgController;
use App\Http\Controllers\ProfileController;
use App\Models\img;
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

Route::get('/', [ImgController::class,'index'])->name("home");

Route::get('home', [ImgController::class,'index']);

Route::view('about-us', "aboutus")->name('au');

Route::get('gallery' , [ImgController::class, 'show'])->name('gallery');

Route::middleware('role:admin')->prefix('dashboard')->group(function(){
Route::get('/' ,[ImgController::class , 'DashboardIndex'])->name('index');
Route::post('addImg' ,[ImgController::class , 'store'])->name('addImg');
Route::get('del/{img}', [ImgController::class, 'destroy'])->name('del');
Route::get('all users' ,[ImgController::class , 'DashboardUser'])->name('users');
});



Route::view('contact-us' ,'contactus')->name('cu');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';