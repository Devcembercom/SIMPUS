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
        <li class="menu-header">{{ __('Laporan') }}</li>
        <li class="dropdown {{ set_active(['identitas-persalinan','lap-pmt-bumil']) }}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                <span>{{ __('Kesga Gizi KB Imunisasi') }}</span></a>
            <ul class="dropdown-menu">
                <li class="{{ set_active('identitas-persalinan') }}"><a class="nav-link"
                        href="{{ route('identitas-persalinan') }}">Identitas Persalinan</a></li>
                <li class="{{ set_active('lap-pmt-bumil') }}"><a class="nav-link"
                        href="{{ route('lap-pmt-bumil') }}">Laporan
                        PMT BUMIL</a></li>
                <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
            </ul>
        </li>
    </ul>
</aside>
