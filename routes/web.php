<?php

use App\Http\Controllers\AddCareerController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropDownController;
use App\Http\Controllers\UserdataController;

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

//  Route::get('/', function () {
//    return view('fronted.index')->name('home');
// });
Route::get('/gallery',[GalleryController::class,'index'])->name('gallery');
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/careers',[CareersController::class,'index'])->name('careers');
//Route::get('/dropdown',[DropDownController::class,'index'])->name('home');
Route::post('/careers',[UserdataController::class,'store'])->name('userdata.store');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   });

//  Route::view('/admin/register','admin.register');
//  Route::view('/admin/login','admin.login');
//  Route::view('/admin/index','admin.index');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
