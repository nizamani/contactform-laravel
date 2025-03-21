<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FreelancerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello, Laravel!";
});

Route::get('/shehzad', [MyController::class, 'index']);

Route::get('/shehzad/welcome', [MyController::class, 'showWelcome']);

// retrive all posts
Route::get('/shehzad/allnotes', [MyController::class, 'allNotes']);

// this page is restricted
Route::get('/restricted', function () {
    return "Welcome! You are old enough.";
})->middleware('checkage');

// show form
Route::get('/shehzad/form', [MyController::class, 'showForm']);

// when form is submitted validate it
Route::post('/shehzad/submit', [MyController::class, 'submitForm'])->name('shehzad/submit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// freelance form submit
Route::get('/freelancer/contact', [FreelancerController::class, 'showForm'])->name('freelancer.form');
Route::post('/freelancer/submit', [FreelancerController::class, 'submitForm'])->name('freelancer.submit');
