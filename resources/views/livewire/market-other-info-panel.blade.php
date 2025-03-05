<div class="otherinfopanel" >
    <h3>Other Market Information</h3>
    @isset($OtherMarketInfos)
            @foreach ($OtherMarketInfos as $otherinfo)
                <div class="otherinfoitem">
                    <div class="infoCat">
                        <span>{{$otherinfo->info_type->name}}</span>
                        <div>
                            <a href="#" wire:click.prevent="update({{$otherinfo->id}})">Edit</a>
                            <a href="#" wire:confirm="Do you really want to remove this item?" wire:click.prevent="remove({{$otherinfo->id}})">Remove</a>
                        </div>
                        
                    </div>
                    <div class="infoTitle">{{$otherinfo->name}}
                    </div>
                    <p class="infoDesc">{{$otherinfo->desc}}</p>
                </div>
            @endforeach
    @endisset

    <div id="OtherInfoInputPane">
        <form action="" wire:submit.prevent="add">
            <h5>Add other information:</h4>
            <textarea id="marketOtherInfo" name="" id="" cols="30" rows="5" wire:model="desc"></textarea>
            <div id="otherinputbottompanel">
                <select name="" value="" wire:model="infotype" required>
                    <option >Select Info Type</option>
                    @isset($OtherInfoTypes)
                        @foreach ($OtherInfoTypes as $infotype)
                            <option value="{{$infotype->id}}">{{$infotype->name}}</option>
                        @endforeach
                    @endisset
                </select>
                <input id="infotitle" type="text" placeholder="Title" wire:model="title" />
                @if ($isUpdate)
                    <input type="submit" value="Update"  />
                @else
                    <input type="submit" value="Add"  />
                @endif
            </div>
        </form>
    </div>

</div>
