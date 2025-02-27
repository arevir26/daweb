<div>
    <h3 id="listHead">Stall Categories</h3>
    @if ($isUpdate)
    <form id="stallcategoryform" wire:submit.prevent="update({{$stall_id}})" method="POST">
        @csrf
        <div><input type="text" wire:model="stall_category" />
            <input type="submit" value="Change" />
        </div>
    </form>
        
    @else
    <form id="stallcategoryform" wire:submit.prevent="add" method="POST">
        @csrf
        <div><input type="text" wire:model="stall_category" />
            <input type="submit" value="Add" />
        </div>
    </form>
    @endif
    
    @isset($stalls)
    @foreach ($stalls as $stall)
    <div class="mItem" wire:key="{{$stall->id}}"> <div class="itemTitle">{{$stall->category_name}}</div><a href="#" wire:click.prevent="edit({{$stall->id}})">Edit</a>
        <a href="" wire:confirm="Do you want to remove this item? (Won't be removed if in use.)" wire:click.prevent="remove({{$stall->id}})">Remove</a>
    </div>
    @endforeach
        
    @endisset
</div>
