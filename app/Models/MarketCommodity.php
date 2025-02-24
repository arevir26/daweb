<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MarketCommodity extends Model
{
    public $timestamps = false;
    public $fillable = ['market_id','commodity_id',
        'source', 'volume', 'traders'];

    public function name():HasOne
    {
        return $this->hasOne(Commodity::class,'id', 'commodity_id');
    }


}
