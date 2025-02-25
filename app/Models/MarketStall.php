<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarketStall extends Model
{
    public $timestamps = false;
    public $fillable = ['market_id', 'stall_category', 'stall_count', 'stall_owners'];
}
