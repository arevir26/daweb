<?php

namespace App\Livewire;

use App\Models\Commodity;
use Livewire\Component;

class CommodityList extends Component
{
    public $commodity_name;
    public $isUpdate = false;
    public $commodity_id;
    public function render()
    {
        $data['commodities'] = Commodity::all();
        return view('livewire.commodity-list', $data);
    }

    

    public function add(){
        if(strlen($this->commodity_name)<1)return;
        $newcommodity = new Commodity();
        $newcommodity->commodity_name= $this->commodity_name;
        $newcommodity->save();
        $this->commodity_name = "";
    }

    public function edit(Commodity $commodity){
        $this->commodity_name = $commodity->commodity_name;
        $this->commodity_id = $commodity->id;
        $this->isUpdate = true;
    }

    public function update(Commodity $commodity){
        if(strlen($this->commodity_name)>0){
            $commodity->commodity_name = $this->commodity_name;
            $commodity->save();
        }
        
        $this->isUpdate = false;
        $this->commodity_name = "";
        $this->commodity_id = null;
    }

    public function remove(Commodity $commodity){
        $commodity->delete();
    }
    
}
