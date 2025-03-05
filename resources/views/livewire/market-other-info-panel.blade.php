<div>
    <table>
        <form action="" wire:submit.prevent="add">
        <tr>
            <td>
                <select name="" value="" wire:model="infotype" required>
                    <option >Select Info Type</option>
                    @isset($OtherInfoTypes)
                        @foreach ($OtherInfoTypes as $infotype)
                            <option value="{{$infotype->id}}">{{$infotype->name}}</option>
                        @endforeach
                    @endisset
                </select>
            </td>
            <td><input type="text" placeholder="Title" wire:model="title" /></td>
            <td>
                @if ($isUpdate)
                    <input type="submit" value="Update"  />
                @else
                    <input type="submit" value="Add"  />
                @endif
                
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <textarea name="" id="" cols="30" rows="5" wire:model="desc"></textarea>
            </td>
        </tr>
        </form>
        
    </table>
    @isset($OtherMarketInfos)
        <div>
            @foreach ($OtherMarketInfos as $otherinfo)
                <div>
                    <div>{{$otherinfo->name}}</div>
                    <div>{{$otherinfo->info_type->name}}</div>
                </div>
                <div>
                    <p>{{$otherinfo->desc}}</p>
                </div>
                <a href="#" wire:click.prevent="remove({{$otherinfo->id}})">Remove</a><br/>
                <a href="#" wire:click.prevent="update({{$otherinfo->id}})">Edit</a>
            @endforeach
        </div>
    @endisset
    
</div>
