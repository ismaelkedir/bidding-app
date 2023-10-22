<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Get the buyer that owns the Transaction
    public function buyer()
    {
        return $this->belongsTo(User::class);
    }

    // Get the seller that owns the Transaction
    public function seller()
    {
        return $this->belongsTo(User::class);
    }
}
