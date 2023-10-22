<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    // Display new auction page
    public function createAuction()
    {
        return view('seller.new-auction');
    }
}
