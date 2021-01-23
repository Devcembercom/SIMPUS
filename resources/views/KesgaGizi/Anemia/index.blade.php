<x-app-layout>
    <x-slot name="header">
        {{ __('LAPORAN IBU HAMIL KEK DAN ANEMIA PUSKESMAS MUNGO') }}
    </x-slot>
    <x-slot name="button">
        <a href="{{ route('fileAnemia',['nagari' => request()->nagari]) }}" class="float-right btn btn-primary"><i class="fa fa-list"></i>
            {{ __('list File Anemia') }}</a>
        <a href="javascript:" class="float-right btn btn-success" data-target="#modalUpload" data-toggle="modal"
            data-placement="bottom" title="" data-original-title="Upload File"><i class="fa fa-file-excel"></i>
            {{ __('Upload File') }}</a>
    </x-slot>
    <x-card>
        {{-- <div class="table-responsive">
            <table class="table table-striped" id="anemia">
                <thead>
                    <tr align="center">
                        <th width="5%" class="pt-2 text-center">{{ __('No') }}</th>
                        <th width="30%">{{ __('Nama Ibu') }}</th>
                        <th>{{ __('Alamat') }}</th>
                        <th>{{ __('Lahir') }}</th>
                        <th>{{ __('Tanggal Ditemukan') }}</th>
                        <th>{{ __('BB') }}</th>
                        <th>{{ __('TB') }}</th>
                        <th>{{ __('Lila') }}</th>
                        <th>{{ __('HB ') }}</th>
                        <th>{{ __('Protein Urin') }}</th>
                    </tr>
                </thead>
                <tbody align="center"></tbody>

            </table>
        </div> --}}

        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src="https://docs.google.com/spreadsheets/d/17pzlah0TqGbiXqFnE2nmwOLFzmqg0YmU8UG0-7rOH5k/edit?usp=sharing&amp;headers=false"></iframe>
        </div>
    </x-card>
</x-app-layout>
@include('KesgaGizi.Anemia.modalUpload')
