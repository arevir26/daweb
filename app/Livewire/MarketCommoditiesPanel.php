<?php

namespace App\Livewire;

use App\Models\Commodity;
use App\Models\MarketCommodity;
use App\Models\MarketInfo;
use Livewire\Component;

class MarketCommoditiesPanel extends Component
{
    public $market_id;
    public $volume;
    public $source;
    public $commodity_id;
    public function render()
    {
        $data['commodities'] = Commodity::all();
        $data['market_commodities'] = MarketInfo::find($this->market_id)->commodities;
        return view('livewire.market-commodities-panel', $data);
    }


    public function addCommodity(){
        if($this->commodity_id==null){
            return;
        }
        $market_commodity = new MarketCommodity();
        $market_commodity->market_id = $this->market_id;
        $market_commodity->commodity_id = $this->commodity_id;
        $market_commodity->source = $this->source;
        $market_commodity->volume = $this->volume;
        $market_commodity->save();
    }

    public function remove(MarketCommodity $market_commodity){
        $market_commodity->delete();
    }

    public function edit(MarketCommodity $market_commodity){
    }
}
