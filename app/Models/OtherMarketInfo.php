<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OtherMarketInfo extends Model
{
    public $timestamps = false;
    public $fillable = ['market', 'infotype', 'name', 'desc'];

    public function info_type():HasOne
    {
        return $this->hasOne(OtherInfoType::class,'id', 'infotype');
    }
}
