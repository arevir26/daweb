<div>
    @isset($market_id)
    <form action="" wire:submit.prevent="addCommodity()">
        <table>
            <tr>
                <td>Commodity</td>
                <td>Monthly Volume</td>
                <td>Source</td>
            </tr>
            <tr>
                <td>
                    <select name="commodities" id="" wire:model="commodity_id">
                        @isset($commodities)
                            @foreach ($commodities as $commodity)
                                <option wire:key="{{$commodity->id}}" value="{{$commodity->id}}">{{$commodity->commodity_name}}</option>
                            @endforeach
                        @endisset
                    </select>
                </td>
                <td><input type="number" step=any name="volume"  wire:model="volume" /></td>
                <td><input type="text" name="source" wire:model="source" /></td>
                <td><input type="submit" value="Add" /></td>
            </tr>
        </table>
    </form>
    @foreach ($market_commodities as $market_commodity)
        <div wire:key="{{$market_commodity->id}}">

            @isset($market_commodity->name->commodity_name)
            {{$market_commodity->name->commodity_name}}
            @endisset

            @isset($market_commodity->volume)
            {{$market_commodity->volume}}
            @endisset

            @isset($market_commodity->source)
            {{$market_commodity->source}}
            @endisset
            <a href="#" wire:click.prevent="edit({{$market_commodity->id}})" >Edit</a>
            <a href="#" wire:click.prevent="remove({{$market_commodity->id}})" >Remove</a>
        </div>
    @endforeach

    @endisset
</div>
