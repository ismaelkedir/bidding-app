<?php

namespace Database\Seeders;

use App\Models\Auction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create sample auctions
        Auction::create([
            'start_date' => now(),
            'end_date' => now()->addDays(7),
            'image' => 'https://i.shgcdn.com/19200e5f-1079-4858-b5df-30b3a9d99ae5/-/format/auto/-/preview/3000x3000/-/quality/lighter/',
            'description' => 'This is the description of the item listed for auction',
            'starting_price' => 8000,
            'status' => 1,
            'category' => 'Jewelry',
            'title' => '50 Ct Gold',
        ]);

        // Add more sample auctions as needed
    }
}
