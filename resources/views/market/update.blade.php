@include('include.header')
<div id="main">
    <div id="sidebar">
        @include('include.marketsidebar')
    </div>
    <div id="content">
        <form method="POST" id="update">
            @csrf
            <input type="hidden" name="id" value="{{$market->id}}">
            <div id="info">
            <fieldset>
                <legend>Market Information</legend>
                <div class="frow">
                    <div>Market Name:</div>
                    <div><input type="text" name="market_name" placeholder="Market Name" value="{{$market->market_name}}" required></div>
                </div>
                <div class="frow">
                    <div>Market Admin:</div>
                    <div><input type="text" name="market_admin" placeholder="Market Admin" value="{{$market->market_admin}}"></div>
                </div>
                <div class="frow">
                    <div>Contact Number:</div>
                    <div><input type="text" name="contact" placeholder="Contact Number" value="{{$market->contact}}"></div>
                </div>
                <div class="frow">
                    <div>Market Type:</div>
                    <div><input type="text" name="market_type" placeholder="Market Type" value="{{$market->market_type}}"></div>
                </div>
                <div class="frow">
                    <div>Management Type:</div>
                    <div><input type="text" name="management" placeholder="Management" value="{{$market->management}}"></div>
                </div>
                <div class="frow">
                    <div>Vendor Demographics:</div>
                    <div><input type="text" name="vendor_demographics" placeholder="Vendor Demographics" value="{{$market->vendor_demographics}}"></div>
                </div>
                <div class="frow">
                    <div>Turnover Rate:</div>
                    <div><input type="text" name="turn_over_rate" placeholder="Turnover Rate" value="{{$market->turn_over_rate}}" ></div>
                </div>
                <div class="frow">
                    <div>Oprating Hours</div>
                    <div><input type="time" name="open_hour"  value="{{$market->open_hour}}" > - 
                        <input type="time" name="close_hour"  value="{{$market->close_hour}}" >
                    </div>
                </div>
                <div class="frow">
                    <div>Market Day (Peak)</div>
                    <div><input type="text" name="peak_day" placeholder="Market Day" value="{{$market->peak_day}}" ></div>
                </div>
                <div class="frow">
                    <div>Start of Peak Hour</div>
                    <div><input type="time" name="peak_hour_start"  value="{{$market->peak_hour_start}}" > - 
                        <input type="time" name="peak_hour_end"  value="{{$market->peak_hour_end}}" >
                    </div>
                </div>
                <div class="frow">
                    <div>Foot Traffic</div>
                    <div>
                        <input type="number" name="foot_traffic" placeholder="Foot Traffic" value="{{$market->foot_traffic}}" >
                    </div>
                </div>
                <div class="frow">
                    <div>Area</div>
                    <div>
                        <input type="number" step="any" name="area" placeholder="Area" value="{{$market->area}}" >
                    </div>
                </div>
                <div class="frow">
                    <div>Date Profiled</div>
                    <div>
                        <input type="date"  name="date_profiled" value="{{$market->date_profiled}}" >
                    </div>
                </div>
                <div class="frow">
                    <div>Date Updated</div>
                    <div>
                        <input type="date" name="date_updated" value="{{$market->date_updated}}" >
                    </div>
                </div>
                
            </fieldset>
            </div>
            <div  id="address">
            <fieldset>
                <legend>Market Address</legend>
                <div class="frow">
                    <div>Province</div>
                    <div>
                        <select  name="province">
                            <option value="Cavite" @selected($market->province=="Cavite")>Cavite</option>
                            <option value="Laguna" @selected($market->province=="Laguna")>Laguna</option>
                            <option value="Batangas" @selected($market->province=="Batangas")>Batangas</option>
                            <option value="Rizal" @selected($market->province=="Rizal")>Rizal</option>
                            <option value="Quezon" @selected($market->province=="Quezon")>Quezon</option>
                        </select>
                    </div>
                </div>
                <div class="frow">
                    <div>Municipality</div>
                    <div><input type="text" name="municipality" placeholder="Municipality/City" value="{{$market->municipality}}"/></div>
                </div>
                <div class="frow">
                    <div>Barangay</div>
                    <div><input type="text" name="barangay" placeholder="Barangay" value="{{$market->barangay}}" /></div>
                </div>
                <div class="frow">
                    <div>Street/Purok</div>
                    <div><input type="text" name="other_address" placeholder="Street" value="{{$market->other_address}}"/></div>
                </div>
                <div class="frow">
                    <div>GPS Latitude</div>
                    <div>
                        <input type="number" step=any name="gps_lat" value="{{$market->gps_lat}}" placeholder="Latitude"/>
                    </div>
                </div>
                <div class="frow">
                    <div>GPS Longitude</div>
                    <div>
                        <input type="number" step=any name="gps_long" value="{{$market->gps_long}}" placeholder="Longitude"/>
                    </div>
                </div>
            </fieldset>
            
            </div>
            @if ($market->id != null)
                <div id="sub"><input type="submit" value="Update"/></div>
            @else
            <div id="sub"><input type="submit" value="Add New"/></div>
            @endif
            
        </form>
    </div>
</div>
@include('include.footer')