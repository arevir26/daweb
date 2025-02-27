<?php

namespace App\Livewire;

use App\Models\StallCategory;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Reference\Reference;
use Livewire\Component;

class StallList extends Component
{
    public $stall_category;
    public $isUpdate = false;
    public $stall_id;


    public function render()
    {
        $data['stalls'] = StallCategory::all();
        return view('livewire.stall-list', $data);
    }

    public function add(){
        if(strlen($this->stall_category)<1)return;
        $newstallcat = new StallCategory();
        $newstallcat->category_name = $this->stall_category;
        $newstallcat->save();
        $this->stall_category = "";
    }

    public function edit(StallCategory $stall_cat){
        $this->stall_category = $stall_cat->category_name;
        $this->stall_id = $stall_cat->id;
        $this->isUpdate = true;
    }

    public function update(StallCategory $stall_cat){
        if(strlen($this->stall_category)>0){
            $stall_cat->category_name = $this->stall_category;
            $stall_cat->save();
        }
        
        $this->isUpdate = false;
        $this->stall_category = "";
        $this->stall_id = null;
    }

    public function remove(StallCategory $stall_cat){
        //prevents deletion if still in use
        $reference = DB::table('market_stalls')->where('stall_category','=', $stall_cat->id)->count();
        if($reference>0)return;
        $stall_cat->delete();
    }
    
}
