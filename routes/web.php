<?php

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
Route::get('/auctions', 'AuctionController@index');
Route::get('/auctions/{auctionId}', 'AuctionController@show');
Route::get('/auctions/{auctionId}/bid', 'BidController@bid');
Route::get('/auctions/{auctionId}/history', 'AuctionController@history');
Route::get('/profile', 'ProfileController@index');

// Buyer Routes
Route::group(['prefix' => 'buyer'], function () {
    Route::get('/dashboard', 'BuyerController@dashboard');
    Route::get('/auctions', 'BuyerController@auctions');
    Route::get('/won-auctions', 'BuyerController@wonAuctions');
});

// Seller Routes
Route::group(['prefix' => 'seller'], function () {
    Route::get('/dashboard', 'SellerController@dashboard');
    Route::get('/create-auction', 'SellerController@createAuction');
    Route::get('/manage-auctions', 'SellerController@manageAuctions');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
