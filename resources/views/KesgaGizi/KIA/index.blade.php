<x-app-layout>
    <x-slot name="header">
        {{ __('PWS KIA') }}
    </x-slot>
    <x-slot name="button">
        <a href="{{ route('lap-bayi.create') }}" class="float-right btn btn-primary">Tambah Data</a>
    </x-slot>
    <x-card>

        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src="https://docs.google.com/spreadsheets/d/1SGgfK-EpRYBUM-aCS6lQb2sAi9ko3YwvxwC5uiYXnLg/edit?usp=sharing&amp;headers=false"></iframe>
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
            $('#bayi').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('lap-bayi') }}",
                columns: [
                    { data: 'DT_RowIndex', name:'DT_RowIndex'},
                {data: 'nama_jorong', name: 'nama_jorong'},
                {data: 'nama_posyandu', name: 'nama_posyandu'},
                {data: 'jumlah_umur', name: 'jumlah_umur'},
                {data: 'jumlah_bayi1', name: 'jumlah_bayi1'},
                {data: 'eklusif1', name: 'eklusif1'},
                {data: 'persen1', name: 'persen1'},
                ],
            });
        });
    </script>
    @endpush
</x-app-layout>
