<?php


use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\JobsController;
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
    Route::get('/', [CandidatesController::class, 'index'])->name('candidates.index');
    Route::get('/registration', [CandidatesController::class, 'create'])->name('candidates.registration');
    Route::post('/store', [CandidatesController::class, 'store'])->name('candidates.store');
    Route::get('/detail/{id}', [CandidatesController::class, 'show'])->name('candidates.detail');
    Route::get('/edit/{id}', [CandidatesController::class, 'edit'])->name('candidates.edit');
});


Route::prefix('jobs')->group(function (){
    Route::get('/', [JobsController::class, 'index'])->name('jobs.index');
    Route::get('/create', [JobsController::class, 'create'])->name('jobs.create');
    Route::post('/store', [JobsController::class, 'store'])->name('jobs.store');
    Route::get('/detail/{id}', [JobsController::class, 'show'])->name('jobs.detail');
    Route::get('/edit/{id}', [JobsController::class, 'edit'])->name('jobs.edit');
});






?>