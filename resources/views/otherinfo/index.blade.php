@include('include.header')

<div id="main">
    <div id="sidebar">
    @include('include.marketsidebar')
    </div>
    <div id="content">
        <livewire:AddOtherInfoTypePanel />
    </div>
</div>


@include('include.footer')