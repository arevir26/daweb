

@include('include.header')

<h1>Markets</h1>

<form method="POST" action="{{route('market.create')}}">
    @csrf
    <input type="text" name="market_name" placeholder="Market Name"/>
    <input type="submit" value="Create"/>
</form>

<h3>List of Markets
@isset($count)
({{$count}} total)
@endisset
: </h3>


@isset($marketinfos)
    @each('market.marketlistitem', $marketinfos, 'market', 'market.marketlistempty')
@endisset

@include('include.footer')