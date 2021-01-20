<x-app-layout>
    <x-slot name="header">
        {{ __('Identitas Persalinan') }}
    </x-slot>
    <x-slot name="button">
        <a href="{{ route('identitas-persalinan.create') }}" class="float-right btn btn-primary">Tambah Data</a>
    </x-slot>
    <x-card>
        {{-- <div class="table-responsive">
            <table class="table table-striped" id="dataIdentitasPersalinan">
                <thead>
                    <tr align="center">
                        <th width="5%" class="pt-2 text-center">{{ __('No') }}</th>
                        <th width="30%">{{ __('Nama Ibu') }}</th>
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
                <tbody align="center"></tbody>

            </table>
        </div> --}}

        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src="https://docs.google.com/spreadsheets/d/1NwtaO0CvKIAHsc2tzivxTccL-kHMdenPyutua2jZmuA/edit?usp=sharing&amp;headers=false"></iframe>
        </div>
    </x-card>
    @push('js')
    <script>
        function confirmDelete(id) {
            swal({
                title: 'Are you sure?',
                text: 'Sekali dihapus, data tersebut tidak bisa dipulihkan!',
                icon: 'warning',
                buttons: true,
                showCancelButton: true,
                dangerMode: true,
            }).then((willDelete) => {
                    if (willDelete) {
                        $('#data-'+id).submit();
                    } else {
                        swal('Operation Canceled.');
                    }
                });
        }
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
            });
        });
    </script>
    @endpush
</x-app-layout>
