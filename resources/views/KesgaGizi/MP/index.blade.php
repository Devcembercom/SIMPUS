<x-app-layout>
    <x-slot name="header">
        {{ __('LAPORAN BALITA DAPAT MP-ASI/ PMT TAHUN 2020') }}
    </x-slot>
    <x-slot name="button">
        <a href="{{ route('fileMp',['nagari' => request()->nagari]) }}" class="float-right btn btn-primary"><i class="fa fa-list"></i>
            {{ __('list File MP') }}</a>
        <a href="javascript:" class="float-right btn btn-success" data-target="#modalUpload" data-toggle="modal"
            data-placement="bottom" title="" data-original-title="Upload File"><i class="fa fa-file-excel"></i>
            {{ __('Upload File') }}</a>
    </x-slot>
    <x-card>
        {{-- <div class="table-responsive">
            <table class="table table-striped" id="Mp">
                <thead>
                    <tr align="center">
                        <th width="5%" class="pt-2 text-center">{{ __('No') }}</th>
                        <th width="30%">{{ __('Nama Balita') }}</th>
                        <th>{{ __('Usia') }}</th>
                        <th>{{ __('Nama Ibu') }}</th>
                        <th>{{ __('Lahir') }}</th>
                        <th>{{ __('Tanggal') }}</th>
                        <th>{{ __('BB') }}</th>
                        <th>{{ __('Jumlah ') }}</th>
                        <th>{{ __('TT') }}</th>
                    </tr>
                </thead>
                <tbody align="center"></tbody>
            </table>
        </div> --}}

        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src="https://docs.google.com/spreadsheets/d/1nFLZaIogHXmI6VjF9U7OVT7euxrTCs1__vX7i1-XPZw/edit?usp=sharing&amp;headers=false"></iframe>
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
@include('KesgaGizi.MP.modalUpload')
