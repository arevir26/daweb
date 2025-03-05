<?php

namespace App\Livewire;

use App\Models\OtherInfoType;
use App\Models\OtherMarketInfo;
use Livewire\Component;

class MarketOtherInfoPanel extends Component
{
    public $market_id;
    public function render()
    {
        $data['OtherInfoTypes'] = OtherInfoType::all();
        return view('livewire.market-other-info-panel', $data);
    }
}
