<ul>
    <li><a @class(['selected' => route('market')==url()->current()]) href="{{route('market')}}">Markets</a></li>
    <li><a @class(['selected' => route('market.createnew')==url()->current()]) href="{{route('market.createnew')}}">Add Market</a></li>
</ul>