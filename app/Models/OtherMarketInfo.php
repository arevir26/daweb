<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherMarketInfo extends Model
{
    public $timestamps = false;
    public $fillable = ['market', 'infotype', 'name', 'desc'];
}
