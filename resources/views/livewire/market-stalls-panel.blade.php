<div>
    @isset($market_id)
    <h3>Market Stall Information</h3>
    <form action="" wire:submit.prevent="add({{$market_id}})">
        @csrf
        <table>
            <tr>
                <td>Stall Category</td>
                <td>Number of Stalls</td>
                <td>Number of Vendors</td>
            </tr>
            <tr>
                <td name="stallform">
                    <select name="" wire:model="stall_category_id">
                        <option>Select Category</option>
                        @isset($stallCategories)
                            @foreach ($stallCategories as $stallCategory)
                                <option value="{{$stallCategory->id}}">{{$stallCategory->category_name}}</option>
                            @endforeach
                        @endisset
                    </select>
                </td>
                <td><input type="number"  wire:model="stall_count" /></td>
                <td><input type="number"  wire:model="stall_owners" /></td>
                <td>
                    @if ($market_stall_id==null)
                        <input type="submit" value="Add" />
                    @else
                        <input type="submit" value="Update" />
                    @endif
                    
                </td>
            </tr>
            @foreach ($market_stalls as $market_stall)
            <tr wire:key="{{$market_stall->id}}">
            <td>
                @isset($market_stall->category)
                {{$market_stall->category->category_name}}
                @endisset
            </td>
            <td>{{$market_stall->stall_count}}</td>
            <td>{{$market_stall->stall_owners}}</td>
            <td>
                <a href="#stallform" wire:click="edit({{$market_stall->id}})" >Edit</a>
                <a href="#" wire:click.prevent="remove({{$market_stall->id}})">Remove</a>
            </td>
            </tr>
            @endforeach
        </table>
    </form>
    

    @endisset
</div>
