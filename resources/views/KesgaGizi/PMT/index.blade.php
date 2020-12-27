<x-app-layout>
    <x-slot name="header">
        {{ __('Laporan PMT BUMIL') }}
    </x-slot>
    <x-slot name="button">
        <a href="{{ route('lap-pmt-bumil.create') }}" class="float-right btn btn-primary">Tambah Data</a>
    </x-slot>
    <x-card>
        <div class="table-responsive">
            <table class="table table-striped" id="PMT">
                <thead>
                    <tr align="center">
                        <th width="5%" class="pt-2 text-center">{{ __('No') }}</th>
                        <th width="30%">{{ __('Nama Bumil') }}</th>
                        <th>{{ __('Usia') }}</th>
                        <th>{{ __('Hamil') }}</th>
                        <th>{{ __('Tanggal') }}</th>
                        <th>{{ __('BB') }}</th>
                        <th>{{ __('LILA') }}</th>
                        <th>{{ __('HB') }}</th>
                        <th>{{ __('Jumlah ') }}</th>
                        <th>{{ __('TT') }}</th>
                       
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
                text: 'Once deleted, you will not be able to recover this imaginary file!',
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
            $('#PMT').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('lap-pmt-bumil') }}",
                columns: [
                { data: 'DT_RowIndex', name:'DT_RowIndex'},
                {data: 'nama_bumil', name: 'nama_bumil'},
                {data: 'usia', name: 'usia'},
                {data: 'hamil', name: 'hamil'},
                {data: 'tgl1', name: 'tgl1'},
                {data: 'bb1', name: 'bb1'},
                {data: 'lila1', name: 'lila1'},
                {data: 'hb1', name: 'hb1'},
                {data: 'jumlah1', name: 'jumlah1'},
                {data: 'tt1', name: 'tt1'},
                ],
            });
        });
    </script>
    @endpush
</x-app-layout>
