

@include('include.header')

<h1>Markets</h1>

<form method="POST" action="{{route('market.create')}}">
    @csrf
    <input type="text" name="market_name" placeholder="Market Name"/>
    <input type="submit" value="Create"/>
</form>

@isset($marketinfos)
    @each('market.marketlistitem', $marketinfos, 'market', 'market.marketlistempty')
@endisset

@include('include.footer')