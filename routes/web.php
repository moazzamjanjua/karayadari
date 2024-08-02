<?php

use App\Http\Controllers\Frontend\RoomDetailController;
use App\Http\Controllers\frontend\UsersController;
use App\Http\Controllers\Owner\OwnerDashboardController;
use App\Http\Controllers\Owner\OwnerLoginController;
use App\Http\Controllers\Owner\HostalFormController;
use App\Http\Controllers\Owner\OwnerRegisterController;
use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\Owner\RoomFormController;
use App\Http\Controllers\Owner\HostalDetailController;
use App\Http\Controllers\ProductGridLeftController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BloggController;
use App\Http\Controllers\Frontend\ContactusController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\RegistrationController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\registerController;
use App\Http\Controllers\admin\profileController;
use App\Http\Controllers\Frontend\UserAccountController;

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

//logout
Route::get('logout',[UsersController::class, 'logout'])->name('logout');

//owner

//Authenticate
Route::view('become-owner' , 'owner.owner-register')->name('become-owner');
Route::view('owner-login' , 'owner.owner-login')->name('owner-login');

Route::post('ownerSave' , [OwnerController::class,'ownerregister'])->name('ownerSave');
Route::post('ownerMatch' , [OwnerController::class,'ownerlogin'])->name('ownerMatch');

Route::view('owner-dashboard', 'owner.home')->name('ownerdashboard');
Route::get('owner-dashboard' , [OwnerController::class,'ownerdashboard'])->name('owner.home');


Route::get('/owner/hostel-form', [HostalFormController::class, 'hostelForm'])->name('owner.hostelForm');

Route::get('/owner/room-form', [RoomFormController::class, 'room'])->name('owner.roomForm');
Route::get('/owner/hostel', [HostalDetailController::class, 'showHostelDetails'])->name('owner.hostelDetails');


Route::post('/owner/room-form', [RoomFormController::class, 'store'])->name('rooms.roomStore');
Route::post('/owner/hostel-form', [HostalFormController::class, 'store'])->name('owner.hostalStore');



// Route::get('/cities', [CitiesController::class, 'create'])->name('cities.create');


//admin 
Route::get('/admin', [adminController::class, 'admin'])->name('admindashboard.index');;


Route::get('/admin/profile', [profileController::class, 'profile']);


//logout
Route::get('logout', [OwnerController::class, 'logout'])->name('logout');


Route::fallback(function(){
    return view('pagenotfound');
});
