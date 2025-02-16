@include('include.header')
<form method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$market->id}}">
    <div class="frow">
        <div>Market Name:</div>
        <div><input type="text" name="market_name" placeholder="Market Name" value="{{$market->market_name}}" required></div>
    </div>
    <fieldset>
        <legend>Market Address</legend>
        <div class="frow">
            <div>Province</div>
            <div><input type="text" name="province" placeholder="Province" value="{{$market->province}}" /></div>
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
    </fieldset>
    
    
    
    <input type="submit" value="Update"/>
</form>
@include('include.footer')