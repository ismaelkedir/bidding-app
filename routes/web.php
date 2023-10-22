<?php

use App\Http\Controllers\AuctionController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // return view('welcome');
    return view('landing-page');
});

// Route::get('/login', 'Auth\LoginController@showLoginForm');
// Route::get('/signup', 'Auth\RegisterController@showRegistrationForm');
Route::get('/auctions', [AuctionController::class, 'index']);
Route::get('/auctions/{auctionId}', [AuctionController::class, 'show'])->name('auctions.show');
Route::get('/auctions/{auctionId}/bid', [BidController::class, 'bid']);
Route::get('/auctions/{auctionId}/history', [AuctionController::class, 'history']);
Route::get('/profile', [ProfileController::class, 'index']);

// Buyer Routes
Route::group(['prefix' => 'buyer'], function () {
    Route::get('/dashboard', [BuyerController::class, 'dashboard']);
    Route::get('/auctions', [BuyerController::class, 'auctions']);
    Route::get('/won-auctions', [BuyerController::class, 'wonAuctions']);
});

// Seller Routes
Route::group(['prefix' => 'seller'], function () {
    Route::get('/dashboard', [SellerController::class, 'dashboard']);
    Route::get('/create-auction', [SellerController::class, 'createAuction']);
    Route::get('/manage-auctions', [SellerController::class, 'manageAuctions']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
