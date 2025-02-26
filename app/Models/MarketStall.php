<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MarketStall extends Model
{
    public $timestamps = false;
    public $fillable = ['market_id', 'stall_category', 'stall_count', 'stall_owners'];

    public function category():HasOne
    {
        return $this->hasOne(StallCategory::class, 'id', 'stall_category');
    }
}
