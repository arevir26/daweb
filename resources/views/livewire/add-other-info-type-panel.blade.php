<div>
    <h3 id="listHead">Other Market Info Category</h3>
    @if ($isUpdate)
    <form id="stallcategoryform" wire:submit.prevent="update({{$otherinfo_id}})" method="POST">
        @csrf
        <div><input type="text" wire:model="info_name" />
            <input type="submit" value="Change" />
        </div>
    </form>
        
    @else
    <form id="stallcategoryform" wire:submit.prevent="add" method="POST">
        @csrf
        <div><input type="text" wire:model="info_name" />
            <input type="submit" value="Add" />
        </div>
    </form>
    @endif
    
    @isset($otherinfotypes)
    @foreach ($otherinfotypes as $otherinfotype)
    <div class="mItem" wire:key="{{$otherinfotype->id}}"> <div class="itemTitle">{{$otherinfotype->name}}</div><a href="#" wire:click.prevent="edit({{$otherinfotype->id}})">Edit</a>
        <a href="" wire:confirm="Do you want to remove this item? (Won't be removed if in use.)" wire:click.prevent="remove({{$otherinfotype->id}})">Remove</a>
    </div>
    @endforeach
        
    @endisset
</div>
