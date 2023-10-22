<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BidController extends Controller
{
    // Create bid
    public function bid($auctionId)
    {
        return view('auctions.bid');
    }
}
