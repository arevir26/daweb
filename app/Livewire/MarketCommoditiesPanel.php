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
    public $traders;
    public $source;
    public $commodity_id;
    public $market_commodity_id;
    
    public $isUpdate = null;

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
        if($this->isUpdate){
            $market_commodity = MarketCommodity::find($this->market_commodity_id);
            if($market_commodity==null){
                $market_commodity = new MarketCommodity();
            }
        }else{
            $market_commodity = new MarketCommodity();
        }
        $market_commodity->market_id = $this->market_id;
        $market_commodity->commodity_id = $this->commodity_id;
        $market_commodity->source = $this->source;
        $market_commodity->volume = $this->volume;
        $market_commodity->traders = $this->traders;
        $market_commodity->save();
        $this->resetfields();
    }

    protected function resetfields(){
        $this->commodity_id = "";
        $this->source = "";
        $this->volume = "";
        $this->traders = "";
        $this->isUpdate = false;
    }

    public function remove(MarketCommodity $market_commodity){
        $market_commodity->delete();
    }

    public function edit(MarketCommodity $market_commodity){
        $this->volume = $market_commodity->volume;
        $this->source = $market_commodity->source;
        $this->traders = $market_commodity->traders;
        $this->commodity_id = $market_commodity->name->id;
        $this->market_commodity_id = $market_commodity->id;
        $this->isUpdate = true;
    }
}
