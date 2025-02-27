<ul>
    <li><a @class(['selected' => route('market')==url()->current()]) href="{{route('market')}}">Markets</a></li>
    <li><a @class(['selected' => route('market.createnew')==url()->current()]) href="{{route('market.createnew')}}">Add Market</a></li>
    <li><a @class(['selected' => route('stallcategory')==url()->current()]) href="{{route('stallcategory')}}">Stall Categories</a></li>
    <li><a @class(['selected' => route('commodities')==url()->current()]) href="{{route('commodities')}}">Commodities</a></li>
    <li><a @class(['selected' => route('otherinfotype')==url()->current()]) href="{{route('otherinfotype')}}">Other Info</a></li>
</ul>