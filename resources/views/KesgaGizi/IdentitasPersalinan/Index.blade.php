<x-app-layout>
    <x-slot name="header">
        {{ __('Identitas Persalinan') }}
    </x-slot>
    <x-slot name="button">
        <a href="{{ route('identitas-persalinan.create') }}" class="float-right btn btn-primary">Tambah Data</a>
    </x-slot>
    <x-card>
        <div class="table-responsive">
            <table class="table table-striped" id="dataIdentitasPersalinan">
                <thead>
                    <tr align="center">
                        <th width="5%" class="pt-2 text-center">{{ __('No') }}</th>
                        <th width="20%">{{ __('Nama Ibu') }}</th>
                        <th>{{ __('Umur') }}</th>
                        <th>{{ __('Nama Suami') }}</th>
                        <th>{{ __('Tgl Partus') }}</th>
                        <th>{{ __('Kondisi Ibu') }}</th>
                        <th>{{ __('Partograf') }}</th>
                        <th>{{ __('Jenis ') }} <br /> {{ __('Persalinan') }}</th>
                        <th>{{ __('Petugas') }}</th>
                        <th>{{ __('Status BYR') }}</th>
                    </tr>
                </thead>
                <tbody></tbody>

            </table>
        </div>
    </x-card>
    @push('js')
    <script>
        $(document).ready(function(){
            $('#dataIdentitasPersalinan').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('identitas-persalinan') }}",
                columns: [
                { data: 'DT_RowIndex', name:'DT_RowIndex'},
                {data: 'nama_ibu', name: 'nama_ibu'},
                {data: 'umur', name: 'umur'},
                {data: 'nama_suami', name: 'nama_suami'},
                {data: 'tgl_partus', name: 'tgl_partus'},
                {data: 'kondisi_ibu', name: 'kondisi_ibu'},
                {data: 'partograf', name: 'partograf'},
                {data: 'jns_persalinan', name: 'jns_persalinan'},
                {data: 'petugas', name: 'petugas'},
                {data: 'status_bayar', name: 'status_bayar'},
                ],
                "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
            });
        });
    </script>
    @endpush
</x-app-layout>
