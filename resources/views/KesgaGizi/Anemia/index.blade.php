<x-app-layout>
    <x-slot name="header">
        {{ __('LAPORAN IBU HAMIL KEK DAN ANEMIA PUSKESMAS MUNGO') }}
    </x-slot>
    <x-slot name="button">
        <a href="{{ route('lap-anemia.create') }}" class="float-right btn btn-primary">Tambah Data</a>
    </x-slot>
    <x-card>
        <div class="table-responsive">
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
            $('#anemia').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('lap-anemia') }}",
                columns: [
                { data: 'DT_RowIndex', name:'DT_RowIndex'},
                {data: 'nama_ibu', name: 'nama_ibu'},
                {data: 'alamat', name: 'alamat'},
                {data: 'lahir', name: 'lahir'},
                {data: 'ditemukan', name: 'ditemukan'},
                {data: 'bb', name: 'bb'},
                {data: 'tb', name: 'tb'},
                {data: 'lila', name: 'lila'},
                {data: 'hb', name: 'hb'},
                {data: 'protein', name: 'protein'},
                ],
            });
        });
    </script>
    @endpush
</x-app-layout>
