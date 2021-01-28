<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}">{{ $title ?? config('app.name') }}</a>
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

        <li class="menu-header">{{ __('Pengguna') }}</li>
        <li class="{{ set_active('pengguna') }}">
            <a href="{{ route('pengguna') }}" class="nav-link"><i
                    class="fas fa-user-plus"></i><span>{{ __('Tambah Pengguna') }}</span></a>
        </li>
        {{-- <li class="menu-header">{{ __('Laporan') }}</li>
        <li class="dropdown {{ set_active(['identitas-persalinan','lap-pmt-bumil','identitasK1k4']) }}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                <span>{{ __('Kesga Gizi KB Imunisasi') }}</span></a>
            <ul class="dropdown-menu">

                <li class="{{ set_active('identitas-persalinan') }}"><a class="nav-link"
                        href="{{ route('identitas-persalinan') }}">Identitas Persalinan</a></li>
                <li class="{{ set_active('lap-pmt-bumil') }}"><a class="nav-link"
                        href="{{ route('lap-pmt-bumil') }}">Laporan
                        PMT BUMIL</a></li>
                <li class="{{ set_active('PwsKiaNagari') }}"><a class="nav-link"
                        href="{{ route('PwsKiaNagari') }}">{{ __('PWS KIA NAGARI') }}</a>
                </li>
                <li class="{{ set_active('identitasK1k4') }}"><a class="nav-link"
                        href="{{ route('identitasK1k4') }}">{{ __('Identitas K1 & K4') }}</a>
                </li>
                <li class="{{ set_active('lap-mp') }}">
                    <a class="nav-link" href="{{ route('lap-mp') }}">{{ __('Laporan Balita Dapat MP')}}</a>
                </li>
                <li class="{{ set_active('lap-anemia') }}">
                    <a class="nav-link" href="{{ route('lap-anemia') }}">{{ __('Laporan Ibu Hamil Kek')}}</a>
                </li>
                <li class="{{ set_active('lap-bayi') }}">
                    <a class="nav-link" href="{{ route('lap-bayi') }}">{{ __('Formulir Rekap Bayi')}}</a>
                </li>
            </ul>
        </li>
        <li class="{{ set_active('promkes') }}">
            <a href="{{ route('promkes') }}" class="nav-link"><i
                    class="fas fa-first-aid"></i><span>{{ __('Promkes Kesling') }}</span></a>
        </li>
        <li class="{{ set_active('lap-lb1') }}">
            <a href="{{ route('lap-lb1') }}" class="nav-link"><i
                    class="fas fa-first-aid"></i><span>{{ __('Laporan LB1') }}</span></a>
        </li> --}}

        <li class="menu-header">{{ __('Jorong') }}</li>
        <li class="dropdown {{ set_active(['lap-jorong','identitas-persalinan','lap-pmt-bumil','identitasK1k4']) }}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                <span>{{ __('LAPORAN JORONG ATAU POSYANDU') }}</span></a>

            <ul class="dropdown-menu">


        @foreach ($nagari as $ngr)
        <li class="@if(request()->nagari == $ngr->id) active @endif">
            <a class="nav-link" href="{{ route('lap-jorong',['nagari' => $ngr->id]) }}">{{ $ngr->nama }}</a>
        </li>
        @endforeach
    </ul>
    </li>

   

    <li class="menu-header">{{ __('Nagari') }}</li>
    
    <li class="{{ set_active('nagari-kesga') }}">
        <a href="{{ route('nagari-kesga') }}" class="nav-link"><i
                class="fas fa-book-open"></i><span>{{ __('Kesga Gizi KB Imunisasi') }}</span></a>
    </li>
    <li class="{{ set_active('promkes') }}">
        <a href="{{ route('promkes') }}" class="nav-link"><i
                class="fas fa-book-open"></i><span>{{ __('Promkes Kesling') }}</span></a>
    </li>
    <li class="menu-header">{{ __('Puskesmas') }}</li>
    <li class="{{ set_active('puskesmas-kesga') }}">
        <a href="{{ route('puskesmas-kesga') }}" class="nav-link"><i
                class="fas fa-columns"></i><span>{{ __('Kesga Gizi KB Imunisasi') }}</span></a>
    </li>
    <li class="{{ set_active('puskesmas-promkes') }}">
        <a href="{{ route('puskesmas-promkes') }}" class="nav-link"><i
                class="fas fa-book-open"></i><span>{{ __('Promkes Kesling') }}</span></a>
    </li>
    </ul>
    <div class="p-3 mt-4 mb-4 hide-sidebar-mini">
        <a href="{{ route('settings.index',['tab' => 'general']) }}"
            class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-cog"></i> {{ __('Settings') }}
        </a>
    </div>
    @php
    $a = App\Models\Lb1File::all()->count();
    $b = App\Models\PromkesFile::all()->count();
    $c = $a+$b
    @endphp
    <div class="p-3 mt-4 mb-4 hide-sidebar-mini">
        <a href="#">{{$c}}</a> File (Dikumpulkan)
    </div>
</aside>
