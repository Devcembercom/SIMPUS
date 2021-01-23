<x-app-layout>
    <x-slot name="header">
        {{ __('LAPORAN BUMIL KEK/ ANEMIA DAPAT PMT TAHUN 2020') }}
    </x-slot>
    <x-slot name="button">
        <a href="{{ route('list.filePmt',['nagari' => request()->nagari]) }}" class="float-right btn btn-primary"><i class="fa fa-list"></i>
            {{ __('list File PMT') }}</a>
        <a href="javascript:" class="float-right btn btn-success" data-target="#modalUpload" data-toggle="modal"
            data-placement="bottom" title="" data-original-title="Upload File"><i class="fa fa-file-excel"></i>
            {{ __('Upload File') }}</a>
    </x-slot>
    <x-card>
        {{-- <div class="table-responsive">
            <table class="table table-striped" id="pmt">
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
        </div> --}}
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src=" https://docs.google.com/spreadsheets/d/1RUcWFAnPlYyaGD6YJ6X2_i5DKYzT4DuFOkFDS9OkF4U/edit?usp=sharing&amp;headers=false"></iframe>
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
            $('#pmt').DataTable({
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
@include('KesgaGizi.PMT.modalUpload')
