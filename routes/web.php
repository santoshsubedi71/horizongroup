<?php


use App\Http\Controllers\CandidateController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
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
Route::prefix('candidates')->group(function () {
    Route::get('/', [CandidateController::class, 'index'])->name('candidates.index');
    Route::get('/registration', [CandidateController::class, 'create'])->name('candidates.registration');
    Route::post('/store', [CandidateController::class, 'store'])->name('candidates.store');
    Route::get('/detail/{id}', [CandidateController::class, 'show'])->name('candidates.detail');
    Route::get('/edit/{id}', [CandidateController::class, 'edit'])->name('candidates.edit');
});


Route::prefix('jobs')->group(function (){
    Route::get('/', [JobController::class, 'index'])->name('jobs.index');
    Route::get('/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/store', [JobController::class, 'store'])->name('jobs.store');
    Route::get('/detail/{id}', [JobController::class, 'show'])->name('jobs.detail');
    Route::get('/edit/{id}', [JobController::class, 'edit'])->name('jobs.edit');
});

Route::prefix('companies')->group(function (){
    Route::get('/', [CompanyController::class, 'index'])->name('companies.index');
    Route::get('/create', [CompanyController::class, 'create'])->name('companies.create');
    Route::post('/store', [CompanyController::class, 'store'])->name('companies.store');
    Route::get('/detail/{id}', [CompanyController::class, 'show'])->name('companies.detail');
    Route::get('/edit/{id}', [CompanyController::class, 'edit'])->name('companies.edit');
});

Route::prefix('employees')->group(function (){
    Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('/store', [EmployeeController::class, 'store'])->name('employees.store');
    Route::get('/detail/{id}', [EmployeeController::class, 'show'])->name('employees.detail');
    Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('employees.edit');
});







?>