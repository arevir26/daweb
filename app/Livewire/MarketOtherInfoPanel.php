<?php

namespace App\Livewire;

use App\Models\OtherInfoType;
use App\Models\OtherMarketInfo;
use Livewire\Component;

class MarketOtherInfoPanel extends Component
{
    public $market_id;
    public $infotype;
    public $title;
    public $desc;
    public $isUpdate = false;
    public $othermarketinfoID;
    public function render()
    {
        $data['OtherInfoTypes'] = OtherInfoType::all();
        $data['OtherMarketInfos'] = OtherMarketInfo::all();
        return view('livewire.market-other-info-panel', $data);
    }

    public function add(){
        if($this->infotype==null)return;
        if($this->isUpdate){
            $otherinfo = OtherMarketInfo::find($this->othermarketinfoID);
        }else{
            $otherinfo = new OtherMarketInfo();
        }
        
        $otherinfo->market = $this->market_id;
        $otherinfo->infotype = $this->infotype;
        $otherinfo->name = $this->title;
        $otherinfo->desc = $this->desc;
        $otherinfo->save();

        $this->infotype = "";
        $this->title = "";
        $this->desc = "";
        $this->isUpdate = false;
        $this->othermarketinfoID = null;
    }

    public function remove(OtherMarketInfo $marketinfo){
        $marketinfo->delete();
    }

    public function update(OtherMarketInfo $marketinfo){
        $this->infotype = $marketinfo->infotype;
        $this->title = $marketinfo->name;
        $this->desc = $marketinfo->desc;
        $this->othermarketinfoID = $marketinfo->id;
        $this->isUpdate = true;
    }
}
