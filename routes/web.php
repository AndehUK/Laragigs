<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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


// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listing/create', [ListingController::class, 'create'])->middleware('auth');

// Store Listing Data
Route::post('/listing', [ListingController::class, 'store'])->middleware('auth');

// Manage Listings Page
Route::get('listing/manage', [ListingController::class, 'manage'])->middleware('auth');

// Show Edit Form
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update Listing
Route::put('listing/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing
Route::delete('listing/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Single Listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);


// Register
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Logout User
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Login
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');

