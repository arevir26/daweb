<div class="inputpanel">
    @isset($market_id)
    <h3 class="panelhead" >Market Commodities, Volume and Sources</h3>
    <form action="" wire:submit.prevent="addCommodity()">
        
        <table id="mCom">
            <thead>
                <td>Commodity</td>
                <td>Monthly Volume</td>
                <td>Number of Traders</td>
                <td>Source</td>
            </thead>
            <tr>
                <td>
                    <select name="commodities" id="" wire:model="commodity_id">
                        <option value="">Select Commodity</option>
                        @isset($commodities)
                            @foreach ($commodities as $commodity)
                                <option @selected($commodity->id==$commodity_id)  wire:key="{{$commodity->id}}" value="{{$commodity->id}}">{{$commodity->commodity_name}}</option>
                            @endforeach
                        @endisset
                    </select>
                </td>
                <td><input style="max-width:100px" type="number" step=any name="volume"  wire:model="volume" /></td>
                <td><input style="max-width:100px" type="number" step=any name="volume"  wire:model="traders" /></td>
                <td><input type="text" name="source" wire:model="source" /></td>
                <td colspan="2">
                    @if ($isUpdate)
                        <input type="submit" value="Update" />
                    @else
                        <input type="submit" value="Add" />
                    @endif
                </td>
            </tr>
            @foreach ($market_commodities as $market_commodity)
            <tr wire:key="{{$market_commodity->id}}">
                <td>
                    @isset($market_commodity->name->commodity_name)
                    {{$market_commodity->name->commodity_name}}
                    @endisset
                </td>
                <td>
                    @isset($market_commodity->volume)
                    {{$market_commodity->volume}}
                    @endisset
                </td>
                <td>
                    @isset($market_commodity->traders)
                    {{$market_commodity->traders}}
                    @endisset
                </td>
                <td>
                    @isset($market_commodity->source)
                    {{$market_commodity->source}}
                    @endisset
                </td>
                <td>
                    <a href="#" wire:click.prevent="edit({{$market_commodity->id}})" >Edit</a>
                    <a href="#" wire:click.prevent="remove({{$market_commodity->id}})" >Remove</a>
                </td>
            </tr>
        @endforeach

        </table>
    </form>


    @endisset
</div>
