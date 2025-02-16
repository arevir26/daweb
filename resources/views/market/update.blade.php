@include('include.header')
<form method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$market->id}}">
    <input type="text" name="market_name" placeholder="Market Name" value="{{$market->market_name}}" required>
    <input type="submit" value="Update"/>
</form>
@include('include.footer')