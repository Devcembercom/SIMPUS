<x-app-layout>
    <x-slot name="header">
        {{ __('Laporan PMT BUMIL') }}
    </x-slot>
    <x-slot name="button">
        <a href="{{ route('lap-pmt-bumil.create') }}" class="float-right btn btn-primary">Tambah Data</a>
    </x-slot>
    <x-card>

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
