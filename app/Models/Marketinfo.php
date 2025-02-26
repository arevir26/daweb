<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MarketInfo extends Model
{
    public $fillable = ['market_name'];

    public function commodities():HasMany
    {
        return $this->hasMany(MarketCommodity::class, 'market_id');
    }

    public function stalls():HasMany
    {
        return $this->hasMany(MarketStall::class, 'market_id', 'id');
    }
}
