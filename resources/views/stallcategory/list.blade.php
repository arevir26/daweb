@include('include.header')
<div id="main">
    <div id="sidebar">
        @include('include.marketsidebar')
    </div>
    <div id="content">
        <form method="POST">
            @csrf
            <div><input type="text" name="stall_category" />
                <input type="submit" value="Add" />
            </div>
        </form>
        @foreach ($collection as $item)
            
        @endforeach
    </div>
</div>
@include('include.footer')