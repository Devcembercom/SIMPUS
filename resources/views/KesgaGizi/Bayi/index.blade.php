<x-app-layout>
    <x-slot name="header">
        {{ __('FORMULIR REKAPITULASI BAYI KURANG DARI 6 BULAN MENDAPAT ASI') }}
    </x-slot>
    <x-slot name="button">
        <a href="{{ route('fileBayi',['nagari' => request()->nagari]) }}" class="float-right btn btn-primary"><i class="fa fa-list"></i>
            {{ __('list File Bayi') }}</a>
        <a href="javascript:" class="float-right btn btn-success" data-target="#modalUpload" data-toggle="modal"
            data-placement="bottom" title="" data-original-title="Upload File"><i class="fa fa-file-excel"></i>
            {{ __('Upload File') }}</a>
    </x-slot>
    <x-card>
        {{-- <div class="table-responsive">
            <table class="table table-striped" id="bayi">
                <thead>
                    <tr align="center">
                        <th width="5%" class="pt-2 text-center">{{ __('No') }}</th>
                        <th width="30%">{{ __('Nama Jorong') }}</th>
                        <th>{{ __('Nama Posyandu') }}</th>
                        <th width="20%">{{ __('Jumlah sasaran Bayi umur 0-6 bulan') }}</th>
                        <th>{{ __('Jumlah Bayi') }}</th>
                        <th>{{ __('Jumlah bayi masih ASI Eksklusif') }}</th>
                        <th>{{ __('%') }}</th>
                    </tr>
                </thead>
                <tbody align="center"></tbody>

            </table>
        </div> --}}

        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src="https://docs.google.com/spreadsheets/d/1yTtQE6JabMI3V9NiVBoSwHfPMcs3NHnW8KtasBJ4v44/edit?usp=sharing&amp;headers=false"></iframe>
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
@include('KesgaGizi.Bayi.modalUpload')
