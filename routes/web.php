<?php

use App\Http\Controllers\ListingController;
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

// Route::get('/listings', [ListingController::class, 'index']);
Route::get('/listings', [ListingController::class, 'index']);
// Route::get('/listings', function() {
//  return view('listings.jobListing');
// });
Route::get('/listings/aplly', function() {
 return view('job-apply.jobApply');
});
Route::get('/listing', function() {
 return view('JobDescView.JobDescView');
});
// Create Form
// Route::get('/listings/create', [ListingController::class, 'create']);

//Create Job
Route::post('/listings', [ListingController::class, 'store']);

//Signle Listing

// Route::get('/listings/{listing}', [ListingController::class, 'show']);
Route::get('/listings/{listing}', [ListingController::class, 'show']);
