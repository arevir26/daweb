@include('include.header')

<div id="main">
    <div id="sidebar">
    @include('include.marketsidebar')
    </div>
    <div id="content">
        <h3 id="listHead" style="text-align: center">Market Profile</h3>
        <h4 id="market_name">{{$market->market_name}}</h4>
        <div id="marketinfo">
        <div>
            <span>Address:</span>
            @isset($market->other_address)
                {{$market->other_address . ","}}
            @endisset 
            @isset($market->barangay)
                {{$market->barangay . ","}}
            @endisset 
            @isset($market->municipality)
                {{$market->municipality . ","}}
            @endisset
            @isset($market->province)
                {{$market->province}}
            @endisset
        </div>
        <div>
            <span>Market Admin:</span>
            @isset($market->market_admin)
                {{$market->market_admin}}
            @endisset 
        </div>
        @isset($market->contact)
            <div><span>Contact No.:</span>{{$market->contact}}</div>
        @endisset
        @isset($market->gps_lat)
        @isset($market->gps_long)
        <div>
            <span>GPS Coordinates:</span> {{$market->gps_lat}},{{$market->gps_long}}
        </div>
        @endisset
        @endisset
        @isset($market->market_type)
            <div><span>Market Type:</span> {{$market->market_type}} </div>
        @endisset
        @isset($market->vendor_demographics)
            <div><span>Vendor Demographics:</span> {{$market->vendor_demographics}} </div>
        @endisset
        @isset($market->turn_over_rate)
            <div><span>Turnover Rate:</span> {{$market->turn_over_rate}} </div>
        @endisset
        @isset($market->open_hour)
            @isset($market->close_hour)
            <div><span>Operating Hours:</span> {{$market->open_hour}} - {{$market->close_hour}} </div>
            @endisset
        @endisset
        @isset($market->peak_hour_start)
            @isset($market->peak_hour_end)
            <div><span>Peak Hours:</span> {{$market->peak_hour_start}} - {{$market->peak_hour_end}} </div>
            @endisset
        @endisset
        @isset($market->foot_traffic)
            <div><span>Foot Traffic:</span> {{$market->foot_traffic}} </div>
        @endisset
        @isset($market->area)
            <div><span>Daily Foot Traffic:</span> {{$market->area}} </div>
        @endisset
        @isset($market->date_profiled)
            <div><span>Date Profiled:</span> {{$market->date_profiled}} </div>
        @endisset
        @isset($market->date_updated)
            <div><span>Date Updated:</span> {{$market->date_updated}} </div>
        @endisset
        @foreach ($commodities as $commodity)
            {{$commodity->name->commodity_name}} - {{$commodity->volume}} - {{$commodity->traders}}
        @endforeach
        </div>

        <livewire:MarketCommoditiesPanel :market_id="$market->id" />
        </div>
    </div>
</div>


@include('include.footer')