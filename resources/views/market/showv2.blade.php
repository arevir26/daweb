@include('include.header')

<div id="main">
    <div id="sidebar">
    @include('include.marketsidebar')
    </div>
    <div id="content">
    @isset($market)
        <h4 id="market_name">{{$market->market_name}}</h4>
        <table style="width: 100%">
            <tr>
                <td>Market Admin:</td>
                <td>
                    @if (isset($market->market_admin))
                        {{$market->market_admin}}
                    @else
                        N/A
                    @endif
                </td>
                <td>Operating Hours:</td>
                <td>
                    @if (isset($market->open_hour)&&isset($market->close_hour))
                        {{$market->open_hour}} - {{$market->close_hour}}
                    @else
                        N/A
                    @endif
                </td>
            </tr>
            <tr>
                <td>Contact Number:</td>
                <td>
                    @if (isset($market->contact))
                        {{$market->contact}}
                    @else
                        N/A
                    @endif
                </td>
                <td>Market Day</td>
                <td>
                    @if (isset($market->peak_day))
                        {{$market->peak_day}}
                    @else
                        N/A
                    @endif
                </td>
            </tr>
            <tr>
                <td>Market Type:</td>
                <td>
                    @if (isset($market->contact))
                        {{$market->contact}}
                    @else
                        N/A
                    @endif
                </td>
                <td>Peak Hours:</td>
                <td>
                    @if (isset($market->peak_hour_start)&&isset($market->peak_hour_end))
                        {{$market->peak_hour_start}} - {{$market->peak_hour_end}}
                    @else
                        N/A
                    @endif
                </td>
            </tr>
            <tr>
                <td>Vendor Demographics:</td>
                <td>
                    @if (isset($market->vendor_demographics))
                        {{$market->vendor_demographics}}
                    @else
                        N/A
                    @endif
                </td>
                <td>Foot Traffic</td>
                <td>
                    @if (isset($market->foot_traffic))
                        {{$market->foot_traffic}}
                    @else
                        N/A
                    @endif
                </td>
            </tr>
            <tr>
                <td>Date Profiled:</td>
                <td>
                    @if (isset($market->date_profiled))
                        {{$market->date_profiled}}
                    @else
                        N/A
                    @endif
                </td>
                <td>Area (sq.m)</td>
                <td>
                    @if (isset($market->area))
                        {{$market->area}}
                    @else
                        N/A
                    @endif
                </td>
            </tr>
            <tr>
                <td>Last Updated:</td>
                <td>
                    @if (isset($market->date_updated))
                        {{$market->date_updated}}
                    @else
                        N/A
                    @endif
                </td>
                <td>Turnover rate:</td>
                <td>
                    @if (isset($market->turn_over_rate))
                        {{$market->turn_over_rate}}
                    @else
                        N/A
                    @endif
                </td>
            </tr>
            <tr>
                <td>GPS Coordinates:</td>
                <td>
                    @if (isset($market->gps_lat)&&isset($market->gps_long))
                        {{$market->gps_lat}}, {{$market->gps_long}}
                    @else
                        N/A
                    @endif
                </td>
                <td></td>
                <td>
                </td>
            </tr>
        </table>

        <h4>Commodities</h4>
        @isset($market->commodities)
        <table>
            <tr>
                <td>Commodity</td>
                <td>Volume</td>
                <td>Traders</td>
                <td>Source</td>
            </tr>
        @foreach ($market->commodities as $commodity)
            <tr>
                <td>{{$commodity->name->commodity_name}}</td>
                <td>{{$commodity->volume}}</td>
                <td>{{$commodity->traders}}</td>
                <td>{{$commodity->source}}</td>
            </tr>
        @endforeach
        </table>
        @endisset

        @isset($market->stalls)
        <h4>Market Stalls</h4>
        <table>
            <tr>
                <td>Stall Category</td>
                <td>Number of Stalls</td>
                <td>Number of Vendors</td>
            </tr>
        @foreach ($market->stalls as $stalls)
            <tr>
                <td>{{$stalls->category->category_name}}</td>
                <td>{{$stalls->stall_count}}</td>
                <td>{{$stalls->stall_owners}}</td>
            </tr>
        @endforeach
        </table>
        @endisset
        @isset($otherInfo)
            @foreach ($otherInfo as $info)
                <div>
                    <h3>{{$info->info_type->name}}</h3>
                    <h5>{{$info->name}}</h5>
                </div>
                {{$info->desc}}
            @endforeach
        @endisset

    @endisset
    
    </div>
</div>


@include('include.footer')