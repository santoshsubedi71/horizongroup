<?php


use App\Http\Controllers\CustomersController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Auth::routes();

Route::get('/' , function(){
    return view('index');
});
Route::get('/home', function () {
    return view('home');

})->middleware('auth');

Route::get('/calender', function () {
    return view('calender');

});
Route::get('/customers', [CustomersController::class, 'index'])->name('customers.index');
Route::get('/registration', [CustomersController::class, 'create'])->name('customers.registration');
Route::post('/store', [CustomersController::class, 'store'])->name('customers.store');
Route::get('/detail/{id}', [CustomersController::class, 'show'])->name('customers.detail');
Route::get('/edit/{id}', [CustomersController::class, 'edit'])->name('customers.edit');

Route::get('contact', [CustomersController::class, 'contact']);




?>