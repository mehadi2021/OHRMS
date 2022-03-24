<?php
namespace App\Http\Controllers\Backend;
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

Route::get('/', function () {
    return view('backend/pages/dashboard/home');
})->name('dashboard');
Route::get('/house',[HouseController::class,'list'])->name('house');
Route::post('/house/create',[HouseController::class,'create'])->name('house.create');
Route::get('/dashboard',[HouseController::class,'dashboard'])->name('home');
  
// Route::get('/',function(){
// return view('backend/pages/dashboard v3/tenant');
// });
//Tenant routes
Route::get('/tenant', [TenantController::class,'list'])->name('tenant');
Route::post('/tenant/create', [TenantController::class,'create'])->name('tenant.create');

//payemnt route
Route::get('/paymentlist', [AdminPaymentController::class,'paymentlist'])->name('payment.list');

//booking routes
Route::get('/show/booking',[AdminBookingController::class,'showbooking'])->name('show.booking');
Route::get('/booking/{id}/{status}',[AdminBookingController::class,'status'])->name('booking.status');