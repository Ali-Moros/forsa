<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\List_;

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


Route::get('/listings', [ListingController::class, 'index']);
// Route::get('/listings', function() {
//  return view('listings.jobListing');
// });


// Route::get('/listings/aplly', function() {
//  return view('job-apply.jobApply');
// });
Route::get('/listings/aplly',  [ListingController::class, 'apply'])->middleware('auth');


Route::get('/', function() {
 return view('home.home');
});


Route::get('/listing', function() {
 return view('JobDescView.JobDescView');
});

// Route::get('/listings/create', [ListingController::class, 'create']);

//Create View
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

//Edit View

// Route::put('/listings/{listing}/edit', [ListingController::class, 'edit']);


//Delete View

Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');;
//Signle Listing

// Route::get('/listings/{listing}', [ListingController::class, 'show']);
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Rgistration View
Route::get('/register', [UserController::class, 'create'])->middleware('guest');



Route::post('/users', [UserController::class, 'store']);

//Logout 
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');;

// Login View
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// User login 
Route::post('/users/authenticate', [UserController::class, 'authenticate']);