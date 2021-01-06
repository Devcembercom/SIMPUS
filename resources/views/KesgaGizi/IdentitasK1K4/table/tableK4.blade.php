<x-card class="card-primary">
    <x-slot name="title">{{ __('Identitas K4') }}</x-slot>
    <a href="{{ route('createDataK4',['type' => 'k4']) }}"
        class="float-right mb-3 btn btn-primary">{{ __('Tambah Data') }}</a>
    <div class="table-responsive">
        <table class="table table-striped" id="tableK4">
            <thead>
                <tr align="center">
                    <th width="5%" class="pt-2 text-center">{{ __('No') }}</th>
                    <th>{{ __('Bulan') }}</th>
                    <th>{{ __('Nama Ibu') }}</th>
                    <th>{{ __('Umur') }}</th>
                    <th>{{ __('Alamat') }}</th>
                    <th>{{ __('Nama Suami') }}</th>
                    <th>{{ __('Tgl K4') }} </th>
                    <th>{{ __('Masalah') }}</th>
                </tr>
            </thead>
            <tbody align="center"></tbody>

        </table>
    </div>
</x-card>
@push('js')
<script>
    $(document).ready(function(){
            $('#tableK4').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('dataK4') }}",
                columns: [
                { data: 'DT_RowIndex', name:'DT_RowIndex'},
                {data: 'bulan', name: 'bulan'},
                {data: 'nama_ibu', name: 'nama_ibu'},
                {data: 'umur', name: 'umur'},
                {data: 'alamat', name: 'alamat'},
                {data: 'nama_suami', name: 'nama_suami'},
                {data: 'tgl_k4', name: 'tgl_k4'},
                {data: 'masalah', name: 'masalah'},
                ],
            });
        });
</script>
@endpush
