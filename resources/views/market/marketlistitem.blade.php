<div class="mItem">
    <a href="{{route('market.show')}}/{{$market->id}}" class="itemTitle">{{$market->market_name}}</a>
    <a href="{{route('market')}}/{{$market->id}}/update"  >Edit</a>
    <a href="{{route('market')}}/{{$market->id}}/remove" onclick="return confirm('Are you sure you want to delete this item?')" >Remove</a>
</div>