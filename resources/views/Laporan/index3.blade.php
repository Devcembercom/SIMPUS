<x-app-layout>
  <x-slot name="header">
      {{ __('LAPORAN PROMKES, KESLING, PIS PK, LANSIA') }}
  </x-slot>
  <x-slot name="button">
      <a href="{{ route('list.promkes',['nagari' => request()->nagari]) }}" class="float-right btn btn-primary"><i class="fa fa-list"></i>
          {{ __('list File Promkes') }}</a>
      <a href="javascript:" class="float-right btn btn-success" data-target="#modalUpload" data-toggle="modal"
          data-placement="bottom" title="" data-original-title="Upload File"><i class="fa fa-file-excel"></i>
          {{ __('Upload File') }}</a>
  </x-slot>
  <x-card>
      <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item"
              src="https://docs.google.com/spreadsheets/d/1dKUUSo_2cPaoWB4Y4UH8rqK1ykdcqLvOJzLiZFwDtGE/edit?usp=sharing&amp;headers=false"></iframe>
      </div>
  </x-card>

</x-app-layout>
@include('Promkes.modalUpload')

