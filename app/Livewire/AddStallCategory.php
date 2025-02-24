<?php

namespace App\Livewire;

use App\Models\StallCategory;
use Livewire\Component;

class AddStallCategory extends Component
{
    public $stalls;
    public $stall_name;
    public function render()
    {
        $this->stalls = StallCategory::all();
        return view('livewire.add-stall-category');
    }

    public function Save(){
        if(strlen($this->stall_name)<1){
            return;
        }
        $data = new StallCategory();
        $data->category_name = $this->stall_name;
        $data->save();
    }

    public function Remove(StallCategory $stall){
        $stall->delete();
    }
}
