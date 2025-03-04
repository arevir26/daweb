<?php

namespace App\Livewire;

use App\Models\OtherInfoType;
use Livewire\Component;

class AddOtherInfoTypePanel extends Component
{
    public $isUpdate=false;
    public $info_name;
    public $otherinfo_id;

    public function render()
    {
        $data['otherinfotypes'] = OtherInfoType::all();
        return view('livewire.add-other-info-type-panel', $data);
    }

    public function add(){
        if($this->otherinfo_id==null){
            $otherinfo = new OtherInfoType();
        }else{
            $otherinfo = OtherInfoType::find($this->otherinfo_id);
        }
        $otherinfo->name = $this->info_name;
        $otherinfo->save();
        $this->otherinfo_id = null;
        $this->isUpdate = null;
        $this->info_name = null;
    }

    public function edit(OtherInfoType $otherinfotype){
        $this->otherinfo_id = $otherinfotype->id;
        $this->info_name = $otherinfotype->name;
        $this->isUpdate = true;
    }

    public function remove(OtherInfoType $otherinfotype){
        $otherinfotype->delete(); 
    }
}
