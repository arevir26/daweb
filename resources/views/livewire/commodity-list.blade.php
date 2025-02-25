<div>
    <h3 id="listHead">Commodities</h3>
    @if ($isUpdate)
    <form id="stallcategoryform" wire:submit.prevent="update({{$commodity_id}})" method="POST">
        @csrf
        <div><input type="text" wire:model="commodity_name" />
            <input type="submit" value="Change" />
        </div>
    </form>
        
    @else
    <form id="stallcategoryform" wire:submit.prevent="add" method="POST">
        @csrf
        <div><input type="text" wire:model="commodity_name" />
            <input type="submit" value="Add" />
        </div>
    </form>
    @endif
    
    @isset($commodities)
    @foreach ($commodities as $commodity)
        <div class="mItem" wire:key="{{$commodity->id}}"> <div class="itemTitle">{{$commodity->commodity_name}}</div><a href="#" wire:click.prevent="edit({{$commodity->id}})">Edit</a>
        <a href="" wire:confirm="Do you want to remove this item?" wire:click.prevent="remove({{$commodity->id}})">Remove</a>
        </div>
    @endforeach
        
    @endisset
</div>
