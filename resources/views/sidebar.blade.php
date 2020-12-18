<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}">{{ config('app.name') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('dashboard') }}">Lib</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">{{ __('Dashboard') }}</li>
        <li class="{{ set_active('dashboard') }}">
            <a href="{{ route('dashboard') }}" class="nav-link"><i
                    class="fas fa-fire"></i><span>{{ __('Dashboard') }}</span></a>
        </li>
</aside>
