@include('include.header')

<div id="main">
    <div id="sidebar">
    @include('include.marketsidebar')
    </div>
    <div id="content">
        <livewire:CommodityList/>
    </div>
</div>


@include('include.footer')