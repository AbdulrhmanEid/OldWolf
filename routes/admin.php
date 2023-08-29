<?php

use App\Http\Controllers\AddCareerController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserdataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin')->name('admin.')->group(function(){

Route::middleware('isAdmin')->group(function(){

Route::get('/index', [AdminHomeController::class,'index'])->name('index');
// Route::view('index', 'admin.index')->name('index');
Route::get('/AddCareer',[AddCareerController::class,'index'])->name('addcareer');
Route::post('/add/career',[AddCareerController::class,'store'])->name('storecareer');
Route::get('/edit/{id}/career',[AddCareerController::class,'edit'])->name('editecareer');
Route::put('/update/{id}/career',[AddCareerController::class,'update'])->name('updatecareer');
Route::delete('/destroy/{id}/destroy',[AddCareerController::class,'destroy'])->name('destroyecareer');

Route::get('/addunit',[UnitController::class,'index'])->name('addunit');
// Route::get('/create/unit',[UnitController::class,'create'])->name('createeunit');
Route::post('/store/unit',[UnitController::class,'store'])->name('storeunit');
Route::get('/edit/{id}/unit',[UnitController::class,'edit'])->name('editunit');
Route::put('/update/{id}/unit',[UnitController::class,'update'])->name('updateunit');
Route::delete('/unit/{id}/destroy',[UnitController::class,'destroy'])->name('destroyunit');

Route::get('/date',[UserdataController::class,'index'])->name('data');
Route::get('/subscription',[SubscriptionController::class,'index'])->name('subscription');



});
require __DIR__ . '/admin_auth.php';
});

// Route::view('/admin/register', 'admin.register');
// Route::view('/admin/login', 'admin.login');



