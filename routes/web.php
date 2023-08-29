<?php

use App\Http\Controllers\AddCareerController;
use App\Http\Controllers\CareerInfoController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropDownController;
use App\Http\Controllers\EgyController;
use App\Http\Controllers\GorController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TargetController;
use App\Http\Controllers\TurkController;
use App\Http\Controllers\UaeController;
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
Route::post('/careers',[UserdataController::class,'store'])->name('userdata.store');
Route::post('/',[SubscriptionController::class,'store'])->name('sub.store');
Route::get('/career/info/{id}',[CareerInfoController::class,'show'])->name('career.info');
Route::post('/search',[HomeController::class,'search'])->name('search');
Route::get('/search',[SearchController::class,'index'])->name('search');
Route::get('/targe/{id}',[TargetController::class,'show'])->name('target');
Route::get('/uae/search',[UaeController::class,'index'])->name('uae');
Route::get('/egy/search',[EgyController::class,'index'])->name('egy');
Route::get('/turk/search',[TurkController::class,'index'])->name('turk');
Route::get('/gor/search',[GorController::class,'index'])->name('gor');


Route::get('/index',[DropDownController::class,'index'])->name('home');
Route::post('api/fetch-state',[DropDownController::class,'fatchState']);
Route::post('api/fetch-cities',[DropDownController::class,'fatchCity']);
Route::get('/LangConverter/{locale}',function($locale){
    if(in_array($locale,['ar','en'])){
        session()->put('locale',$locale);
    }
    return redirect()->back();
})->name('LangConverter');







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
