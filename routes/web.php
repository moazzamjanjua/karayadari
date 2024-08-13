<?php

use App\Http\Controllers\Frontend\RoomDetailController;
use App\Http\Controllers\frontend\UsersController;
use App\Http\Controllers\Owner\HostalFormController;
use App\Http\Controllers\Owner\HostelsController;
use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\Owner\RoomController;
use App\Http\Controllers\Owner\RoomFormController;
use App\Http\Controllers\Owner\HostalDetailController;
use App\Http\Controllers\ProductGridLeftController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BloggController;
use App\Http\Controllers\Frontend\ContactusController;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\profileController;


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
//user

Route::get('/', [HomeController::class, 'index'])->name('frontend.index');
Route::get('/blog', [BloggController::class, 'index']);
Route::get('/blog_detail', [BloggController::class, 'index']);
Route::get('/contact', [ContactusController::class, 'index']);

//Authenticate

Route::view('register' , 'frontend.user-register')->name('register');
Route::view('login' , 'frontend.user-login')->name('login');

Route::post('registerSave' , [UsersController::class,'userregister'])->name('registerSave');
Route::post('loginMatch' , [UsersController::class , 'userlogin'])->name('loginMatch');





//Room-detail
Route::get('/product-grid-sidebar-left', [ProductGridLeftController::class , 'productgridleft']);
Route::get('/room-detail' , [RoomDetailController::class , 'roomDetail']);

//profile
Route::view('user-profile','frontend.user-profile' )->name('user-profile');
Route::get('user-profile' ,[UsersController::class , 'profile'])->name('user-profile');
Route::put('user-profile/update' ,[UsersController::class , 'update'])->name('user-profile.update');



//Authenticate
Route::view('become-owner' , 'owner.owner-register')->name('become-owner');
Route::view('owner-login' , 'owner.owner-login')->name('owner-login');

Route::post('ownerSave' , [OwnerController::class,'ownerregister'])->name('ownerSave');
Route::post('ownerMatch' , [OwnerController::class,'ownerlogin'])->name('ownerMatch');



//owner dashboard
Route::view('owner-dashboard', 'owner.home')->name('ownerdashboard');
Route::get('owner-dashboard' , [OwnerController::class,'ownerdashboard'])->name('owner.home');

Route::view('hostel-details', 'owner.hostel-details')->name('hostel-detail');
Route::view('room-form', 'owner.room-form')->name('addRoom');

Route::get('add-hostel' , [HostelsController::class,'hostelform'])->name('addHostel');
Route::post('hostels', [HostelsController::class, 'store'])->name('owner.hostels.store');


Route::get('hostels/{id}', [HostelsController::class, 'show'])->name('owner.hostel.show');

Route::get('hostel/{id}/add-room', [RoomController::class, 'showroom'])->name('addRoom');
Route::post('rooms', [RoomController::class, 'store'])->name('rooms.store');


Route::get('hostels/{id}/edit', [HostelsController::class, 'edit'])->name('owner.hostel.edit');
Route::post('hostels/{id}', [HostelsController::class, 'update'])->name('owner.hostel.update');




//profile-update
Route::put('/owner/update', [OwnerController::class, 'update'])->name('owner.update');



//admin 
Route::get('/admin', [adminController::class, 'admin'])->name('admindashboard.index');;


Route::get('/admin/profile', [profileController::class, 'profile']);

//logout user

Route::get('user.logout',[UsersController::class, 'logout'])->name('user.logout');

//logout owner
Route::get('owner.logout', [OwnerController::class, 'logout'])->name('owner.logout');




Route::fallback(function(){
    return view('pagenotfound');
});

Route::get('room-detail/{id}', [RoomDetailController::class, 'show'])->name('room-detail.show');
