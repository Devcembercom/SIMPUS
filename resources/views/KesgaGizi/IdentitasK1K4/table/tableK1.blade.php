<x-card class="card-primary">
    <x-slot name="title">{{ __('Identitas K1') }}</x-slot>
    <a href="" class="btn btn-primary float-right mb-3">{{ __('Tambah Data') }}</a>
    <div class="table-responsive">
        <table class="table table-striped" id="tableK1">
            <thead>
                <tr align="center">
                    <th width="5%" class="pt-2 text-center">{{ __('No') }}</th>
                    <th width="30%">{{ __('Nama Ibu') }}</th>
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
