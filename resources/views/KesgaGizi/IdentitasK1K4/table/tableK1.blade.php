<x-card class="card-primary">
    <x-slot name="title">{{ __('Identitas K1') }}</x-slot>
    <a href="" class="btn btn-primary float-right mb-3">{{ __('Tambah Data') }}</a>
    <div class="table-responsive">
        <table class="table table-striped" id="tableK1">
            <thead>
                <tr align="center">
                    <th width="5%" class="pt-2 text-center">{{ __('No') }}</th>
                    <th>{{ __('Bulan') }}</th>
                    <th>{{ __('Nama Ibu') }}</th>
                    <th>{{ __('Umur') }}</th>
                    <th>{{ __('Alamat') }}</th>
                    <th>{{ __('Nama Suami') }}</th>
                    <th>{{ __('Hamil Ke ') }} </th>
                    <th>{{ __('HPHT') }}</th>
                    <th>{{ __('Usia Kehamilan') }}</th>
                    <th>{{ __('DPT Buku') }}</th>
                </tr>
            </thead>
            <tbody align="center"></tbody>

        </table>
    </div>
</x-card>
@push('js')
<script>
    $(document).ready(function(){
            $('#tableK1').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('dataK1') }}",
                columns: [
                { data: 'DT_RowIndex', name:'DT_RowIndex'},
                {data: 'bulan', name: 'bulan'},
                {data: 'nama_ibu', name: 'nama_ibu'},
                {data: 'umur', name: 'umur'},
                {data: 'alamat', name: 'alamat'},
                {data: 'nama_suami', name: 'nama_suami'},
                {data: 'hamil_ke', name: 'hamil_ke'},
                {data: 'hpht', name: 'hpht'},
                {data: 'usia_hamil', name: 'usia_hamil'},
                {data: 'dpt_buku', name: 'dpt_buku'},
                ],
            });
        });
</script>
@endpush
