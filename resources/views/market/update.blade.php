@include('include.header')
<form method="POST">
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
            <div><input type="text" name="vendor_demographics" placeholder="Vendor Demographics" value="{{$market->vendor_demographics}}" required></div>
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
    <div id="sub"><input type="submit" value="Update"/></div>

    
    
    
    
</form>
@include('include.footer')