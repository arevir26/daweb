<?php

namespace App\Livewire;

use App\Models\MarketStall;
use App\Models\StallCategory;
use Livewire\Component;

class MarketStallsPanel extends Component
{

    public $market_id;
    public function render()
    {
        if($this->market_id==null){
            return "";
        }
        $data['stallCategories'] = StallCategory::all();
        return view('livewire.market-stalls-panel', $data);
    }
}
