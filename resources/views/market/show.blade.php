@include('include.header')

<div id="main">
    <div id="sidebar">
    @include('include.marketsidebar')
    </div>
    <div id="content">
        <h3 id="listHead" style="text-align: center">Market Profile</h3>
        <h4>{{$market->market_name}}</h4>
        <div id="marketinfo">
        <div>
            <span>Address:</span><span>
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
            </span>
        </div>
        <div>
            <span>Market Admin:</span><span>
            @isset($market->market_admin)
                {{$market->market_admin}}
            @endisset 
            </span>
        </div>
        @isset($market->contact)
            <div>Contact No.:{{$market->contact}}</div>
        @endisset
        @isset($market->gps_lat)
        @isset($market->gps_long)
        <div>
        GPS Coordinates: {{$market->gps_lat}},{{$market->gps_long}}
        </div>
        @endisset
        @endisset
        @isset($market->market_type)
            <div><span>Market Type:</span> {{$market->market_type}} </div>
        @endisset

        <pre>{{print_r($market)}}</pre>
        @isset($market->vendor_demographics)
            <div>Vendor Demographics:{{$vendor_demographics}}</div>
        @endisset

        </div>
    </div>
</div>


@include('include.footer')