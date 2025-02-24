<div>
    <form wire:submit.prevent="Save">
        @csrf
        <div><input type="text" wire:model="stall_name" />
            <input type="submit" value="Add" />
        </div>
    </form>
    @foreach ($stalls as $stall)
        <div>{{$stall->category_name}} <a href="" wire:click.prevent="Remove({{$stall->id}})" >Remove</a> </div>
    @endforeach
</div>
