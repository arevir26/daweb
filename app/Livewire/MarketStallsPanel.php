<?php

namespace App\Livewire;

use App\Models\MarketInfo;
use App\Models\MarketStall;
use App\Models\StallCategory;
use Livewire\Component;

class MarketStallsPanel extends Component
{

    public $market_id;
    public $stall_category_id;
    public $stall_count;
    public $stall_owners;
    public $market_stall_id;
    public function render()
    {
        if($this->market_id==null){
            return "";
        }
        $data['stallCategories'] = StallCategory::all();
        $data['market_stalls'] = MarketInfo::find($this->market_id)->stalls;
        return view('livewire.market-stalls-panel', $data);
    }


    public function add(MarketInfo $market){

        if($this->stall_category_id==null)return;
        
        if($this->market_stall_id==null){
            $market_stall = new MarketStall();
        }else{
            $market_stall = MarketStall::find($this->market_stall_id);
        }
        $market_stall->market_id = $market->id;
        $market_stall->stall_category = $this->stall_category_id;
        $market_stall->stall_count = $this->stall_count;
        $market_stall->stall_owners = $this->stall_owners;
        $market_stall->save();
        $this->stall_category_id = null;
        $this->stall_count = null;
        $this->stall_owners = null;
        $this->market_stall_id = null;
    }

    public function remove(MarketStall $stall){

        $stall->delete();
    }

    public function edit(MarketStall $stall){
        $this->market_stall_id = $stall->id;
        $this->stall_category_id = $stall->stall_category;
        $this->stall_count = $stall->stall_count;
        $this->stall_owners = $stall->stall_owners;
    }
}
