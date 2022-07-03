<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[FrontendController::class,'home']);
Route::get('/profile',[FrontendController::class,'profile']);
Route::get('/services',[FrontendController::class,'services']);
Route::get('/consultancy-sectors',[FrontendController::class,'consultancy_sectors']);
Route::get('/contact-us',[FrontendController::class,'contact']);
Route::get('/clients',[FrontendController::class,'client']);
// Route::get('/about-us',function(){
//     return view('frontend.about');
// });

// Route::get('/privacy-policy',function(){
//     return view('frontend.privacy');
// });
// Route::get('/become-a-dealer',function(){
//     return view('frontend.dealer');
// });

// Route::resource('contact', ContactController::class);

///end frontend routes///
Route::get('/admin',[AdminController::class,'index']);
Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.login');
Route::group(['middleware'=>'admin_auth','prefix'=>'admin'],function(){
    Route::get('dashboard',[AdminController::class,'show']);
Route::get('category/status/{type}/{id}',[CategoryController::class,'status']);
Route::resource('category', CategoryController::class);



Route::get('admin/logout',function(){
session()->forget('ADMIN_LOGIN');
session()->forget('ADMIN_ID');
return redirect('admin')->with('success','Logout Successfully');
    })->name('admin.logout');

});



