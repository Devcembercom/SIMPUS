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


        <li class="dropdown {{ set_active(['identitas-persalinan','lap-pmt-bumil','identitasK1k4']) }}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                <span>{{ __('Kesga Gizi KB Imunisasi') }}</span></a>
                
            <ul class="dropdown-menu">
               
                {{-- <li class="{{ set_active('identitas-persalinan') }}"><a class="nav-link"
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
                <li class="{{ set_active('lap-BGM') }}">
                    <a class="nav-link" href="{{ route('lap-BGM') }}">{{ __('Laporan Balita BGM')}}</a>
                </li>
                <li class="{{ set_active('lap-MTBS2') }}">
                    <a class="nav-link" href="{{ route('lap-MTBS2') }}">{{ __('Laporan MTBS2-59 BLN')}}</a>
                </li>
                <li class="{{ set_active('lap-MTBS') }}">
                    <a class="nav-link" href="{{ route('lap-MTBS') }}">{{ __('Laporan MTBS 0-2 BLN')}}</a>
                </li>
                <li class="{{ set_active('lap-NIFAS') }}">
                    <a class="nav-link" href="{{ route('lap-NIFAS') }}">{{ __('Laporan Kunjungan Nifas')}}</a>
                </li> --}}

                <li class="{{ set_active('lap-jorong') }}">
                    <a class="nav-link" href="{{ route('lap-jorong') }}">{{ __('L Dama')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong2') }}">
                    <a class="nav-link" href="{{ route('lap-jorong2') }}">{{ __('SIKABU 2')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong3') }}">
                    <a class="nav-link" href="{{ route('lap-jorong3') }}">{{ __('TJ HARO SLTN')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong4') }}">
                    <a class="nav-link" href="{{ route('lap-jorong4') }}">{{ __('bkt kndng')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong5') }}">
                    <a class="nav-link" href="{{ route('lap-jorong5') }}">{{ __('TJ HARO UTARA')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong6') }}">
                    <a class="nav-link" href="{{ route('lap-jorong6') }}">{{ __('P. PANJANG')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong7') }}">
                    <a class="nav-link" href="{{ route('lap-jorong7') }}">{{ __('Tarok')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong8') }}">
                    <a class="nav-link" href="{{ route('lap-jorong8') }}">{{ __('TB Buruk')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong9') }}">
                    <a class="nav-link" href="{{ route('lap-jorong9') }}">{{ __('KP KOTO')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong10') }}">
                    <a class="nav-link" href="{{ route('lap-jorong10') }}">{{ __('KP TANGAH')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong11') }}">
                    <a class="nav-link" href="{{ route('lap-jorong11') }}">{{ __('TJ BARUAH')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong12') }}">
                    <a class="nav-link" href="{{ route('lap-jorong12') }}">{{ __('GL GNDG')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong13') }}">
                    <a class="nav-link" href="{{ route('lap-jorong13') }}">{{ __('P. GADANG')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong14') }}">
                    <a class="nav-link" href="{{ route('lap-jorong14') }}">{{ __('BL BUKIK')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong15') }}">
                    <a class="nav-link" href="{{ route('lap-jorong15') }}">{{ __('BATANG TABIK')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong16') }}">
                    <a class="nav-link" href="{{ route('lap-jorong16') }}">{{ __('VI KP')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong17') }}">
                    <a class="nav-link" href="{{ route('lap-jorong17') }}">{{ __('VIII KP')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong18') }}">
                    <a class="nav-link" href="{{ route('lap-jorong18') }}">{{ __('M.KADOK')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong19') }}">
                    <a class="nav-link" href="{{ route('lap-jorong19') }}">{{ __('XII KP')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong20') }}">
                    <a class="nav-link" href="{{ route('lap-jorong20') }}">{{ __('RAGEH')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong21') }}">
                    <a class="nav-link" href="{{ route('lap-jorong21') }}">{{ __('SBLG')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong22') }}">
                    <a class="nav-link" href="{{ route('lap-jorong22') }}">{{ __('TABING')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong23') }}">
                    <a class="nav-link" href="{{ route('lap-jorong23') }}">{{ __('TJ KALING')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong24') }}">
                    <a class="nav-link" href="{{ route('lap-jorong24') }}">{{ __('P.TINGGI')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong25') }}">
                    <a class="nav-link" href="{{ route('lap-jorong25') }}">{{ __('KPL')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong26') }}">
                    <a class="nav-link" href="{{ route('lap-jorong26') }}">{{ __('KPLII')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong27') }}">
                    <a class="nav-link" href="{{ route('lap-jorong27') }}">{{ __('BA')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong28') }}">
                    <a class="nav-link" href="{{ route('lap-jorong28') }}">{{ __('BB')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong29') }}">
                    <a class="nav-link" href="{{ route('lap-jorong29') }}">{{ __('TT')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong30') }}">
                    <a class="nav-link" href="{{ route('lap-jorong30') }}">{{ __('BGS')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong31') }}">
                    <a class="nav-link" href="{{ route('lap-jorong31') }}">{{ __('BT.LABI')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong32') }}">
                    <a class="nav-link" href="{{ route('lap-jorong32') }}">{{ __('TALAWEH)')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong33') }}">
                    <a class="nav-link" href="{{ route('lap-jorong33') }}">{{ __('KT BKRG')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong34') }}">
                    <a class="nav-link" href="{{ route('lap-jorong34') }}">{{ __('L LALANG')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong35') }}">
                    <a class="nav-link" href="{{ route('lap-jorong35') }}">{{ __('BTN/ GADANG')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong36') }}">
                    <a class="nav-link" href="{{ route('lap-jorong36') }}">{{ __('ZIPUR')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong37') }}">
                    <a class="nav-link" href="{{ route('lap-jorong37') }}">{{ __('AKASIA')}}</a>
                </li>
                <li class="{{ set_active('lap-jorong38') }}">
                    <a class="nav-link" href="{{ route('lap-jorong38') }}">{{ __('ZAMRUD')}}</a>
                </li>
            </ul>
        </li>
        <li class="dropdown {{ set_active('promkes') }}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book-open"></i>
                <span>{{ __('promkes Kesling') }}</span></a>
                
            <ul class="dropdown-menu">
               
                <li class="{{ set_active('promkes') }}">
                    <a class="nav-link" href="{{ route('promkes') }}">{{ __('L Dama')}}</a>
                </li>
                <li class="{{ set_active('promkes2') }}">
                    <a class="nav-link" href="{{ route('promkes2') }}">{{ __('SIKABU 2')}}</a>
                </li>
                <li class="{{ set_active('promkes3') }}">
                    <a class="nav-link" href="{{ route('promkes3') }}">{{ __('TJ HARO SLTN')}}</a>
                </li>
                <li class="{{ set_active('promkes4') }}">
                    <a class="nav-link" href="{{ route('promkes4') }}">{{ __('bkt kndng')}}</a>
                </li>
                <li class="{{ set_active('promkes5') }}">
                    <a class="nav-link" href="{{ route('promkes5') }}">{{ __('TJ HARO UTARA')}}</a>
                </li>
                <li class="{{ set_active('promkes6') }}">
                    <a class="nav-link" href="{{ route('promkes6') }}">{{ __('P. PANJANG')}}</a>
                </li>
                <li class="{{ set_active('promkes7') }}">
                    <a class="nav-link" href="{{ route('promkes7') }}">{{ __('Tarok')}}</a>
                </li>
                <li class="{{ set_active('promkes8') }}">
                    <a class="nav-link" href="{{ route('promkes8') }}">{{ __('TB Buruk')}}</a>
                </li>
                <li class="{{ set_active('promkes9') }}">
                    <a class="nav-link" href="{{ route('promkes9') }}">{{ __('KP KOTO')}}</a>
                </li>
                <li class="{{ set_active('promkes10') }}">
                    <a class="nav-link" href="{{ route('promkes10') }}">{{ __('KP TANGAH')}}</a>
                </li>
                <li class="{{ set_active('promkes11') }}">
                    <a class="nav-link" href="{{ route('promkes11') }}">{{ __('TJ BARUAH')}}</a>
                </li>
                <li class="{{ set_active('promkes12') }}">
                    <a class="nav-link" href="{{ route('promkes12') }}">{{ __('GL GNDG')}}</a>
                </li>
                <li class="{{ set_active('promkes13') }}">
                    <a class="nav-link" href="{{ route('promkes13') }}">{{ __('P. GADANG')}}</a>
                </li>
                <li class="{{ set_active('promkes14') }}">
                    <a class="nav-link" href="{{ route('promkes14') }}">{{ __('BL BUKIK')}}</a>
                </li>
                <li class="{{ set_active('promkes15') }}">
                    <a class="nav-link" href="{{ route('promkes15') }}">{{ __('BATANG TABIK')}}</a>
                </li>
                <li class="{{ set_active('promkes16') }}">
                    <a class="nav-link" href="{{ route('promkes16') }}">{{ __('VI KP')}}</a>
                </li>
                <li class="{{ set_active('promkes17') }}">
                    <a class="nav-link" href="{{ route('promkes17') }}">{{ __('VIII KP')}}</a>
                </li>
                <li class="{{ set_active('promkes18') }}">
                    <a class="nav-link" href="{{ route('promkes18') }}">{{ __('M.KADOK')}}</a>
                </li>
                <li class="{{ set_active('promkes19') }}">
                    <a class="nav-link" href="{{ route('promkes19') }}">{{ __('XII KP')}}</a>
                </li>
                <li class="{{ set_active('promkes20') }}">
                    <a class="nav-link" href="{{ route('promkes20') }}">{{ __('RAGEH')}}</a>
                </li>
                <li class="{{ set_active('promkes21') }}">
                    <a class="nav-link" href="{{ route('promkes21') }}">{{ __('SBLG')}}</a>
                </li>
                <li class="{{ set_active('promkes22') }}">
                    <a class="nav-link" href="{{ route('promkes22') }}">{{ __('TABING')}}</a>
                </li>
                <li class="{{ set_active('promkes23') }}">
                    <a class="nav-link" href="{{ route('promkes23') }}">{{ __('TJ KALING')}}</a>
                </li>
                <li class="{{ set_active('promkes24') }}">
                    <a class="nav-link" href="{{ route('promkes24') }}">{{ __('P.TINGGI')}}</a>
                </li>
                <li class="{{ set_active('promkes25') }}">
                    <a class="nav-link" href="{{ route('promkes25') }}">{{ __('KPL')}}</a>
                </li>
                <li class="{{ set_active('promkes26') }}">
                    <a class="nav-link" href="{{ route('promkes26') }}">{{ __('KPLII')}}</a>
                </li>
                <li class="{{ set_active('promkes27') }}">
                    <a class="nav-link" href="{{ route('promkes27') }}">{{ __('BA')}}</a>
                </li>
                <li class="{{ set_active('promkes28') }}">
                    <a class="nav-link" href="{{ route('promkes28') }}">{{ __('BB')}}</a>
                </li>
                <li class="{{ set_active('promkes29') }}">
                    <a class="nav-link" href="{{ route('promkes29') }}">{{ __('TT')}}</a>
                </li>
                <li class="{{ set_active('promkes30') }}">
                    <a class="nav-link" href="{{ route('promkes30') }}">{{ __('BGS')}}</a>
                </li>
                <li class="{{ set_active('promkes31') }}">
                    <a class="nav-link" href="{{ route('promkes31') }}">{{ __('BT.LABI')}}</a>
                </li>
                <li class="{{ set_active('promkes32') }}">
                    <a class="nav-link" href="{{ route('promkes32') }}">{{ __('TALAWEH)')}}</a>
                </li>
                <li class="{{ set_active('promkes33') }}">
                    <a class="nav-link" href="{{ route('promkes33') }}">{{ __('KT BKRG')}}</a>
                </li>
                <li class="{{ set_active('promkes34') }}">
                    <a class="nav-link" href="{{ route('promkes34') }}">{{ __('L LALANG')}}</a>
                </li>
                <li class="{{ set_active('promkes35') }}">
                    <a class="nav-link" href="{{ route('promkes35') }}">{{ __('BTN/ GADANG')}}</a>
                </li>
                <li class="{{ set_active('promkes36') }}">
                    <a class="nav-link" href="{{ route('promkes36') }}">{{ __('ZIPUR')}}</a>
                </li>
                <li class="{{ set_active('promkes37') }}">
                    <a class="nav-link" href="{{ route('promkes37') }}">{{ __('AKASIA')}}</a>
                </li>
                <li class="{{ set_active('promkes38') }}">
                    <a class="nav-link" href="{{ route('promkes38') }}">{{ __('ZAMRUD')}}</a>
                </li>
            </ul>
        </li>
        
        <li class="dropdown {{ set_active('lap-lb1') }}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book"></i>
                <span>{{ __('Laporan LB1') }}</span></a>
                
            <ul class="dropdown-menu">
               
                <li class="{{ set_active('lap-lb1') }}">
                    <a class="nav-link" href="{{ route('lap-lb1') }}">{{ __('L Dama')}}</a>
                </li>
                <li class="{{ set_active('lap-lb12') }}">
                    <a class="nav-link" href="{{ route('lap-lb12') }}">{{ __('SIKABU 2')}}</a>
                </li>
                <li class="{{ set_active('lap-lb13') }}">
                    <a class="nav-link" href="{{ route('lap-lb13') }}">{{ __('TJ HARO SLTN')}}</a>
                </li>
                <li class="{{ set_active('lap-lb14') }}">
                    <a class="nav-link" href="{{ route('lap-lb14') }}">{{ __('bkt kndng')}}</a>
                </li>
                <li class="{{ set_active('lap-lb15') }}">
                    <a class="nav-link" href="{{ route('lap-lb15') }}">{{ __('TJ HARO UTARA')}}</a>
                </li>
                <li class="{{ set_active('lap-lb16') }}">
                    <a class="nav-link" href="{{ route('lap-lb16') }}">{{ __('P. PANJANG')}}</a>
                </li>
                <li class="{{ set_active('lap-lb17') }}">
                    <a class="nav-link" href="{{ route('lap-lb17') }}">{{ __('Tarok')}}</a>
                </li>
                <li class="{{ set_active('lap-lb18') }}">
                    <a class="nav-link" href="{{ route('lap-lb18') }}">{{ __('TB Buruk')}}</a>
                </li>
                <li class="{{ set_active('lap-lb19') }}">
                    <a class="nav-link" href="{{ route('lap-lb19') }}">{{ __('KP KOTO')}}</a>
                </li>
                <li class="{{ set_active('lap-lb110') }}">
                    <a class="nav-link" href="{{ route('lap-lb110') }}">{{ __('KP TANGAH')}}</a>
                </li>
                <li class="{{ set_active('lap-lb111') }}">
                    <a class="nav-link" href="{{ route('lap-lb111') }}">{{ __('TJ BARUAH')}}</a>
                </li>
                <li class="{{ set_active('lap-lb112') }}">
                    <a class="nav-link" href="{{ route('lap-lb112') }}">{{ __('GL GNDG')}}</a>
                </li>
                <li class="{{ set_active('lap-lb113') }}">
                    <a class="nav-link" href="{{ route('lap-lb113') }}">{{ __('P. GADANG')}}</a>
                </li>
                <li class="{{ set_active('lap-lb114') }}">
                    <a class="nav-link" href="{{ route('lap-lb114') }}">{{ __('BL BUKIK')}}</a>
                </li>
                <li class="{{ set_active('lap-lb115') }}">
                    <a class="nav-link" href="{{ route('lap-lb115') }}">{{ __('BATANG TABIK')}}</a>
                </li>
                <li class="{{ set_active('lap-lb116') }}">
                    <a class="nav-link" href="{{ route('lap-lb116') }}">{{ __('VI KP')}}</a>
                </li>
                <li class="{{ set_active('lap-lb117') }}">
                    <a class="nav-link" href="{{ route('lap-lb117') }}">{{ __('VIII KP')}}</a>
                </li>
                <li class="{{ set_active('lap-lb118') }}">
                    <a class="nav-link" href="{{ route('lap-lb118') }}">{{ __('M.KADOK')}}</a>
                </li>
                <li class="{{ set_active('lap-lb119') }}">
                    <a class="nav-link" href="{{ route('lap-lb119') }}">{{ __('XII KP')}}</a>
                </li>
                <li class="{{ set_active('lap-lb120') }}">
                    <a class="nav-link" href="{{ route('lap-lb120') }}">{{ __('RAGEH')}}</a>
                </li>
                <li class="{{ set_active('lap-lb121') }}">
                    <a class="nav-link" href="{{ route('lap-lb121') }}">{{ __('SBLG')}}</a>
                </li>
                <li class="{{ set_active('lap-lb122') }}">
                    <a class="nav-link" href="{{ route('lap-lb122') }}">{{ __('TABING')}}</a>
                </li>
                <li class="{{ set_active('lap-lb123') }}">
                    <a class="nav-link" href="{{ route('lap-lb123') }}">{{ __('TJ KALING')}}</a>
                </li>
                <li class="{{ set_active('lap-lb124') }}">
                    <a class="nav-link" href="{{ route('lap-lb124') }}">{{ __('P.TINGGI')}}</a>
                </li>
                <li class="{{ set_active('lap-lb125') }}">
                    <a class="nav-link" href="{{ route('lap-lb125') }}">{{ __('KPL')}}</a>
                </li>
                <li class="{{ set_active('lap-lb126') }}">
                    <a class="nav-link" href="{{ route('lap-lb126') }}">{{ __('KPLII')}}</a>
                </li>
                <li class="{{ set_active('lap-lb127') }}">
                    <a class="nav-link" href="{{ route('lap-lb127') }}">{{ __('BA')}}</a>
                </li>
                <li class="{{ set_active('lap-lb128') }}">
                    <a class="nav-link" href="{{ route('lap-lb128') }}">{{ __('BB')}}</a>
                </li>
                <li class="{{ set_active('lap-lb129') }}">
                    <a class="nav-link" href="{{ route('lap-lb129') }}">{{ __('TT')}}</a>
                </li>
                <li class="{{ set_active('lap-lb130') }}">
                    <a class="nav-link" href="{{ route('lap-lb130') }}">{{ __('BGS')}}</a>
                </li>
                <li class="{{ set_active('lap-lb131') }}">
                    <a class="nav-link" href="{{ route('lap-lb131') }}">{{ __('BT.LABI')}}</a>
                </li>
                <li class="{{ set_active('lap-lb132') }}">
                    <a class="nav-link" href="{{ route('lap-lb132') }}">{{ __('TALAWEH)')}}</a>
                </li>
                <li class="{{ set_active('lap-lb133') }}">
                    <a class="nav-link" href="{{ route('lap-lb133') }}">{{ __('KT BKRG')}}</a>
                </li>
                <li class="{{ set_active('lap-lb134') }}">
                    <a class="nav-link" href="{{ route('lap-lb134') }}">{{ __('L LALANG')}}</a>
                </li>
                <li class="{{ set_active('lap-lb135') }}">
                    <a class="nav-link" href="{{ route('lap-lb135') }}">{{ __('BTN/ GADANG')}}</a>
                </li>
                <li class="{{ set_active('lap-lb136') }}">
                    <a class="nav-link" href="{{ route('lap-lb136') }}">{{ __('ZIPUR')}}</a>
                </li>
                <li class="{{ set_active('lap-lb137') }}">
                    <a class="nav-link" href="{{ route('lap-lb137') }}">{{ __('AKASIA')}}</a>
                </li>
                <li class="{{ set_active('lap-lb138') }}">
                    <a class="nav-link" href="{{ route('lap-lb138') }}">{{ __('ZAMRUD')}}</a>
                </li>
            </ul>
        </li>

        <li class="menu-header">{{ __('Nagari') }}</li>
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
                    class="fas fa-book-open"></i><span>{{ __('Promkes Kesling') }}</span></a>
        </li>
        <li class="{{ set_active('lap-lb1') }}">
            <a href="{{ route('lap-lb1') }}" class="nav-link"><i
                    class="fas fa-book"></i><span>{{ __('Laporan LB1') }}</span></a>
        </li>

        <li class="menu-header">{{ __('Puskesmas') }}</li>
        <li class="{{ set_active('chart-kesga') }}">
            <a href="{{ route('chart-kesga') }}" class="nav-link"><i
                    class="fas fa-columns"></i><span>{{ __('Kesga Gizi KB Imunisasi') }}</span></a>
        </li>
        <li class="{{ set_active('chart-promkes') }}">
            <a href="{{ route('chart-promkes') }}" class="nav-link"><i
                    class="fas fa-book-open"></i><span>{{ __('Promkes Kesling') }}</span></a>
        </li>
        <li class="{{ set_active('chart-lb1') }}">
            <a href="{{ route('chart-lb1') }}" class="nav-link"><i
                    class="fas fa-book"></i><span>{{ __('Laporan LB1') }}</span></a>
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
