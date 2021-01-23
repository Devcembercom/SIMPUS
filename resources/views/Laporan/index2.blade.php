<x-app-layout>
    <x-slot name="header">
        {{ __('LAPORAN KESGA GIZI KB IMUNISASI') }}
    </x-slot>
   
    <div class="section-body">
        <div class="row">
          <div class="col-4 col-md-4 col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4>Idenitas Persalinan</h4>
              </div>
              <div class="card-body">
                <div class="empty-state" data-height="200">
                  <div class="empty-state-icon">
                    <i class="fas fa-times"></i>
                  </div>
                  <a href="{{ route('identitas-persalinan') }}" class="btn btn-primary mt-4">Tambah</a>
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
                    <i class="fas fa-times"></i>
                  </div>
                  <a href="{{ route('lap-pmt-bumil') }}" class="btn btn-primary mt-4">Tambah</a>
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
                    <i class="fas fa-times"></i>
                  </div>
                  <a href="{{ route('PwsKiaNagari') }}" class="btn btn-primary mt-4">Tambah</a>
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
                    <i class="fas fa-times"></i>
                  </div>
                  <a href="{{ route('identitasK1k4') }}" class="btn btn-primary mt-4">Tambah</a>
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
                    <i class="fas fa-times"></i>
                  </div>
                  <a href="{{ route('lap-mp') }}" class="btn btn-primary mt-4">Tambah</a>
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
                    <i class="fas fa-times"></i>
                  </div>
                  <a href="{{ route('lap-anemia') }}" class="btn btn-primary mt-4">Tambah</a>
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
                    <i class="fas fa-times"></i>
                  </div>
                  <a href="{{ route('lap-bayi') }}" class="btn btn-primary mt-4">Tambah</a>
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
                    <i class="fas fa-times"></i>
                  </div>
                  <a href="{{ route('lap-BGM') }}" class="btn btn-primary mt-4">Tambah</a>
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
                    <i class="fas fa-times"></i>
                  </div>
                  <a href="{{ route('lap-MTBS2') }}" class="btn btn-primary mt-4">Tambah</a>
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
                    <i class="fas fa-times"></i>
                  </div>
                  <a href="{{ route('lap-MTBS') }}" class="btn btn-primary mt-4">Tambah</a>
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
                    <i class="fas fa-times"></i>
                  </div>
                  <a href="{{ route('lap-NIFAS') }}" class="btn btn-primary mt-4">Tambah</a>
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
                    <i class="fas fa-times"></i>
                  </div>
                  <a href="{{ route('lap-Penyuluhan') }}" class="btn btn-primary mt-4">Tambah</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @push('js')
   
    @endpush
</x-app-layout>
