<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    //additional routes
    Route::get('/photos', [PhotoController::class, 'show'])->name('photos.show');
    Route::post('/photos/hire/{photo}', [PhotoController::class, 'hire'])->name('photos.hire');
    //delete and redirect to pay
    Route::post('/photos/{photo}/hire', [PhotoController::class, 'hire'])->name('photos.hire');
    Route::get('/photos/pay', [PaymentController::class, 'showPaymentForm'])->name('photos.pay');
    Route::post('/payment/process', [PaymentController::class, 'processPayment'])->name('payment.process');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    //added routes for pic/add/delete
    Route::get('/admin/photos', [PhotoController::class, 'index'])->name('photos.index');
    Route::get('/admin/photos/create', [PhotoController::class, 'create'])->name('photos.create');
    Route::post('/admin/photos', [PhotoController::class, 'store'])->name('photos.store');
    Route::delete('/admin/photos/{photo}', [PhotoController::class, 'destroy'])->name('photos.destroy');
    Route::get('/admin/photos/payments', [PhotoController::class, 'showPayments'])->name('photos.payments');
});


/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
