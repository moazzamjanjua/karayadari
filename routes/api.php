<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DataController;
use App\Http\Controllers\Api\FeedBackController;
use App\Http\Controllers\Api\OwnerDashboardController;
use App\Http\Controllers\Api\HostelController;
use App\Http\Controllers\Api\OwnerController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/login', function(){
    return "Hellow this is get";
});

//user authentication

Route::post('user/register' , 'App\Http\Controllers\Api\UsersController@store');
Route::post('user/login', [App\Http\Controllers\Api\UsersController::class, 'index']);
//home data
Route::get('/public/get-data', 'App\Http\Controllers\Api\DataController@getData');
Route::get('/public/all-hostels', [DataController::class, 'allHostel']);
//review store 
Route::post('user/reviews', [App\Http\Controllers\Api\ReviewController::class, 'store']);
Route::get('/public/hostels/{id}/reviews', [App\Http\Controllers\Api\ReviewController::class, 'getHostelReviews']);
//find hostel
Route::get('/public/find-hostels', [DataController::class, 'findHostels']);

//owner
Route::post('owner/register' ,[OwnerController::class,'store']);
Route::post('owner/login', [OwnerController::class, 'ownerlogin']);

Route::get('/owner-dashboard/{id}', [OwnerDashboardController::class, 'getOwnerDashboard']);

//hostel form
Route::post('hostels/store', [HostelController::class, 'store']);
//feedback
Route::post('public/feedback/store', [FeedbackController::class, 'store']);

