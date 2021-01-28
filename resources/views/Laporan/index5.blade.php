<x-app-layout>
    <x-slot name="header">
        {{ __('Laporan Kesga Nagari') }}
    </x-slot>
  
    <x-card>
        <div class="section-body">
            <div class="row">
              <div class="col-6 col-md-6 col-sm-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Rekap Laporan Kesga Nagari</h4>
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
             
              <div class="col-6 col-md-6 col-sm-6">
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
            </div>
          </div>
    </x-card>
</x-app-layout>
@include('KesgaGizi.LB1.modalUpload')
