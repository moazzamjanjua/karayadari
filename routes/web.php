<?php

use App\Http\Controllers\Owner\OwnerDashboardController;
use App\Http\Controllers\Owner\OwnerLoginController;
use App\Http\Controllers\Owner\HostalFormController;
use App\Http\Controllers\Owner\OwnerRegisterController;
use App\Http\Controllers\ProductGridLeftController;
use App\Http\Controllers\CitiesController;
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
Route::get('/contact', [ContactusController::class, 'index']);
//authenticate
Route::get('/register', [RegistrationController::class, 'register']);

Route::post('/register' , [RegistrationController::class,'store']);
Route::get('/login', [LoginController::class, 'login'])->name('frontend.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('frontend.authenticate');
//product
Route::get('/product-grid-sidebar-left', [ProductGridLeftController::class , 'productgridleft']);

//profile
Route::get('/myaccount', [LoginController::class, 'userAccount'])->name('frontend.user-acount');
// Route::get('/myaccount', [LoginController::class, 'authenticate'])->name('frontend.user-acount');

//owner
Route::get('/owner/register', [OwnerRegisterController::class, 'ownerregister']);
Route::post('/owner/register' , [OwnerRegisterController::class,'store']);
Route::get('/owner/login', [OwnerLoginController::class, 'ownerlogin'])->name('owner.owner-login');
Route::get('/owner', [OwnerDashboardController::class, 'home'])->name('owner.home');
Route::post('/owner/login', [OwnerLoginController::class, 'authenticate'])->name('owner.authenticate');
Route::get('/owner/hostel-form/{id}', [HostalFormController::class, 'hostelForm'])->name('owner.hostelForm');
Route::post('/owner/hostel-form/{id}', [HostalFormController::class, 'store'])->name('owner.home');
Route::put('/owner/{id}', [OwnerDashboardController::class, 'update'])->name('owner.update');
// Route::get('/cities', [CitiesController::class, 'create'])->name('cities.create');

//home
Route::get('/owner', [OwnerLoginController::class, 'home'])->name('owner.home');
//admin 
Route::get('/admin', [adminController::class, 'admin'])->name('admindashboard.index');;
Route::get('/admin/register', [registerController::class, 'register']);
Route::post('/admin/register', [registerController::class, 'store']);
Route::get('/admin/login', [LoginController::class, 'login'])->name('admindashboard.login');
Route::post('/admin/login', [LoginController::class, 'authenticate'])->name('admin.authenticate');

Route::get('/admin/profile', [profileController::class, 'profile']);
