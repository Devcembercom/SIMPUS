<x-app-layout>
    <x-slot name="header">
        {{ __('FORMULIR REKAPITULASI BAYI KURANG DARI 6 BULAN MENDAPAT ASI') }}
    </x-slot>
    <x-slot name="button">
        <a href="{{ route('lap-bayi.create') }}" class="float-right btn btn-primary">Tambah Data</a>
    </x-slot>
    <x-card>
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
            $('#Mp').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('lap-mp') }}",
                columns: [
                    { data: 'DT_RowIndex', name:'DT_RowIndex'},
                {data: 'nama_balita', name: 'nama_balita'},
                {data: 'usia', name: 'usia'},
                {data: 'ibu', name: 'ibu'},
                {data: 'lahir', name: 'lahir'},
                {data: 'tgl1', name: 'tgl1'},
                {data: 'bb1', name: 'bb1'},
                {data: 'jumlah1', name: 'jumlah1'},
                {data: 'tt1', name: 'tt1'},
                ],
            });
        });
    </script>
    @endpush
</x-app-layout>
