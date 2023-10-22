<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    // Create index
    public function index()
    {
        $auctions = Auction::all();
        return view('auctions.index', compact('auctions'));
    }

    // Create show
    public function show($auctionId)
    {
        $auction = Auction::findOrFail($auctionId);
        return view('auctions.show', compact('auction'));
    }

    // Create history
    public function history($auctionId)
    {
        return view('auctions.history');
    }
}

