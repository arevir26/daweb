<div class="mItem">
    <div>{{$market->market_name}}</div>
    <a href="{{route('market.show')}}/{{$market->id}}" >View</a>
    <a href="{{route('market')}}/{{$market->id}}/update" >Edit</a>
    <a href="{{route('market')}}/{{$market->id}}/remove" >Remove</a>
</div>