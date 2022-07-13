<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlluserController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\OrderdetailController;


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

//registration
Route::get('/',[AlluserController::class,'Registration'])->name('registration');
Route::post('/',[AlluserController::class,'registrationSubmitted'])->name('registration');

//login
Route::get('/login',[AlluserController::class,'login'])->name('login');
Route::post('/login',[AlluserController::class,'loginSubmitted'])->name('login');
Route::get('/logout',[AlluserController::class,'logout'])->name('logout');

//Admin
Route::get('/Dashboard',[AlluserController::class,'adminDashboard'])->name('adminDashboard')->middleware('admin');
Route::get('/AddDeliveryMan',[DeliveryController::class,'addDeliveryMan'])->name('addDel')->middleware('admin');
Route::post('/AddDeliveryMan',[DeliveryController::class,'addDeliveryManSubmitted'])->name('addDel');
Route::get('/Profile',[AlluserController::class,'Adminprofile'])->name('profile')->middleware('admin');
Route::post('/Profile',[AlluserController::class,'AdminprofileSubmitted'])->name('profile');
Route::get('/Users',[AlluserController::class,'Users'])->name('user')->middleware('admin');
Route::get('/delete/{id}',[AlluserController::class,'DeleteUser'])->name('delete');
Route::get('/details/{id}',[AlluserController::class,'DetailsInfo'])->name('details');
Route::post('/details',[AlluserController::class,'DetailsInfoSubmitted'])->name('details');
Route::get('/order',[OrderdetailController::class,'OrderInfo'])->name('order')->middleware('admin');
Route::get('/orderDetails/{id}',[OrderdetailController::class,'OrderDetails'])->name('OrderDetails');
Route::get('/orderHistory',[OrderdetailController::class,'OrderHistory'])->name('OrderHistory')->middleware('admin');
Route::get('/HistoryDetails/{id}',[OrderdetailController::class,'HistoryDetails'])->name('HistoryDetails');
Route::get('/DeliveryHistory',[DeliveryController::class,'DeliveryHistory'])->name('DeliveryHistory')->middleware('admin');
Route::get('/DeliveryDetails/{id}',[DeliveryController::class,'DeliveryDetails'])->name('DeliveryDetails');
Route::get('/Accept/{id}',[AlluserController::class,'acceptDel'])->name('accept');
Route::get('/downloadPdf/{id}',[AlluserController::class,'downloadPdf'])->name('downloadPdf');