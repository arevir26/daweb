@include('include.header')
<div id="main">
    <div id="sidebar">
        @include('include.marketsidebar')
    </div>
    <div id="content">
        <livewire:StallList/>
    </div>
</div>
@include('include.footer')