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
        <li class="menu-header">{{ __('Kesga Gizi KB Imunisasi') }}</li>
        <li class="{{ set_active('identitas-persalinan') }}">
            <a href="{{ route('identitas-persalinan') }}" class="nav-link"><i
                    class="fa fa-female"></i><span>{{ __('Identitas Persalinan ') }}</span></a>
        </li>
        {{--  <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                <span>Layout</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
                <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
                <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
            </ul>
        </li>  --}}
    </ul>
</aside>
