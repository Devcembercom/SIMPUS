<x-app-layout>
    <x-slot name="header">
        {{ __('Laporan') }}
    </x-slot>
    <x-slot name="button">
        <a href="{{route('menu.form')}}" class="float-right btn btn-success" ><i class="fa fa-file-excel"></i>
            {{ __('Tambah Laporan') }}</a>
    </x-slot>
    <div class="section-body">
        <div class="row">
            @forelse ($datas as $data => $dat)
                <div class="col-4 col-md-4 col-sm-4">
                    <div class="card">
                        <div class="card-header">
                        
                            <h4>{{$dat->laporan}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="empty-state" data-height="200">
                            <div class="empty-state-icon">
                                <i class="fad fa-book-user"></i>
                            </div>
                                <a href="menu/laporan-view/{{$dat->id}}" class="btn btn-primary mt-4">Isi Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            <div class="col-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <div class="empty-state" data-height="200">
                            <i>Data Kosong</i>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
    
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
@include('KesgaGizi.Bayi.modalUpload')
