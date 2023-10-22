<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuctionController extends Controller
{
    // Create index
    public function index()
    {
        return view('auctions.index');
    }

    // Create show
    public function show($auctionId)
    {
        return view('auctions.show');
    }

    // Create history
    public function history($auctionId)
    {
        return view('auctions.history');
    }
}

