<x-app-layout>
    <x-slot name="header">
        {{ __('LAPORAN KESGA GIZI KB IMUNISASI') }}
    </x-slot>

    <div class="section-body">
        <div class="row">
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>Identitas Persalinan</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fad fa-book-user"></i>
                  </div>
                  <a href="{{ route('identitas-persalinan',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>Laporan PMT BUMIL</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon bg-primary">
                    <i class="fas fa-book-alt"></i>
                  </div>
                  <a href="{{ route('lap-pmt-bumil',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>PWS KIA NAGARI</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon bg-primary">
                    <i class="fas fa-book-reader"></i>
                  </div>
                  <a href="{{ route('PwsKiaNagari',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>Identitas K1 & K4</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fas fa-user-alt"></i>
                  </div>
                  <a href="{{ route('identitasK1k4',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>Laporan Balita Dapat MP</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon bg-primary">
                    <i class="fas fa-baby"></i>
                  </div>
                  <a href="{{ route('lap-mp',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>Laporan Ibu Hamil Kek</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fas fa-book-medical"></i>
                  </div>
                  <a href="{{ route('lap-anemia',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>Formulir Rekap Bayi</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon bg-primary">
                    <i class="fas fa-baby-carriage"></i>
                  </div>
                  <a href="{{ route('lap-bayi',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>Laporan Balita BGM</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fas fa-baby"></i>
                  </div>
                  <a href="{{ route('lap-BGM',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>Laporan MTBS2-59 BLN</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon bg-primary">
                    <i class="fas fa-file-medical"></i>
                  </div>
                  <a href="{{ route('lap-MTBS2',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>Laporan MTBS 0-2 BLN</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fas fa-file-medical-alt"></i>
                  </div>
                  <a href="{{ route('lap-MTBS',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>Laporan Kunjungan Nifas</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fas fa-notes-medical"></i>
                  </div>
                  <a href="{{ route('lap-NIFAS',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>Penyuluhan</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fas fa-users-medical"></i>
                  </div>
                  <a href="{{ route('lap-penyuluhan',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>Kesga Gizi</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fas fa-meat"></i>
                  </div>
                  <a href="{{ route('lap-kesgaz',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>Lansia</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fad fa-users"></i>
                  </div>
                  <a href="{{ route('lap-lansia',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>P2P</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fas fa-books"></i>
                  </div>
                  <a href="{{ route('lap-p2p',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>Penjaringan</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fas fa-share-all"></i>
                  </div>
                  <a href="{{ route('lap-penjaringan',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>Diare</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fas fa-user-injured"></i>
                  </div>
                  <a href="{{ route('lap-diare',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>Jiwa</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fas fa-briefcase-medical"></i>
                  </div>
                  <a href="{{ route('lap-jiwa',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>LAPORAN IDENTITAS PASIEN</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fas fa-users-medical"></i>
                  </div>
                  <a href="{{ route('lap-pasien',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>LAPORAN KEMATIAN</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fad fa-book-dead"></i>
                  </div>
                  <a href="{{ route('lap-kematian',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>UKK</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fas fa-calendar"></i>
                  </div>
                  <a href="{{ route('lap-ukk',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>Perkesmas</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fas fa-clinic-medical"></i>
                  </div>
                  <a href="{{ route('lap-perkesmas',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>LPLPO</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fas fa-file-check"></i>
                  </div>
                  <a href="{{ route('lap-LPLPO',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>Kunjungan</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fas fa-home-heart"></i>
                  </div>
                  <a href="{{ route('lap-kunjungan',['nagari' => request()->nagari]) }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @push('js')

    @endpush
</x-app-layout>
