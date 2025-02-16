@include('include.header')

<div id="main">
    <div id="sidebar">
    @include('include.marketsidebar')
    </div>
    <div id="content">
        <h3 id="listHead">List of Markets
        @isset($count)
        ({{$count}} total)
        @endisset
        : </h3>
        
        <div id="mListCon">
        @isset($marketinfos)
            @each('market.marketlistitem', $marketinfos, 'market', 'market.marketlistempty')
        @endisset
        
        </div>
    </div>
</div>


@include('include.footer')