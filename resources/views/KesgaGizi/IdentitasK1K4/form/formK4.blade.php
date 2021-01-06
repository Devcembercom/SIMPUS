<x-app-layout>
    <x-slot name="header">
        {{ $updateMode ? __('Update Identitas K2 Puskesmas') : __('Create Identitas K2 Puskesmas') }}
    </x-slot>

    <x-card class="card-primary">
        <form action="{{ $updateMode ? route('updateK4',$data->id) : route('storeK4') }}" method="post" nonvalidate=""
            class="needs-validation">
            @csrf
            <div class="row">
                <div class="form-group col-md-6 col-lg-6 col-12">
                    <x-label for="bulan">{{ __('Bulan') }}</x-label>
                    <x-input id="bulan" class="{{ $errors->has('bulan') ? ' is-invalid' : '' }}" type="month"
                        name="bulan" value="{{ $updateMode ? $data->bulan : old('bulan') }}" tabindex="1" required
                        autofocus />
                    <x-input-error for="bulan" />
                </div>
                <div class="form-group col-md-6 col-lg-6 col-12">
                    <x-label for="nama_ibu">{{ __('Nama Ibu') }}</x-label>
                    <x-input id="nama_ibu" class="{{ $errors->has('nama_ibu') ? ' is-invalid' : '' }}" type="text"
                        name="nama_ibu" value="{{ $updateMode ? $data->nama_ibu : old('nama_ibu') }}" tabindex="1"
                        required autofocus />
                    <x-input-error for="nama_ibu" />
                </div>
                <div class="form-group col-md-6 col-lg-6 col-12">
                    <x-label for="umur">{{ __('Umur Ibu') }}</x-label>
                    <x-input id="umur" class="{{ $errors->has('umur') ? ' is-invalid' : '' }}" type="number" min="0"
                        name="umur" value="{{ $updateMode ? $data->umur : old('umur') }}" tabindex="1" required
                        autofocus />
                    <x-input-error for="umur" />
                </div>
                <div class="form-group col-md-6 col-lg-6 col-12">
                    <x-label for="nama_suami">{{ __('Nama Suami') }}</x-label>
                    <x-input id="nama_suami" class="{{ $errors->has('nama_suami') ? ' is-invalid' : '' }}" type="text"
                        name="nama_suami" value="{{ $updateMode ? $data->nama_suami : old('nama_suami') }}" tabindex="1"
                        required autofocus />
                    <x-input-error for="nama_suami" />
                </div>
                <div class="form-group col-md-6 col-lg-6 col-12">
                    <x-label for="alamat">{{ __('Alamat') }}</x-label>
                    <textarea name="alamat" id="alamat"
                        class="form-control {{ $errors->has('alamat') ? ' is-invalid' : '' }}">{{ $updateMode ? $data->alamat : old('alamat')}}</textarea>
                    <x-input-error for="alamat" />
                </div>
                <div class="form-group col-md-6 col-lg-6 col-12">
                    <x-label for="tgl_k4">{{ __('Tanggal K4') }}</x-label>
                    <x-input id="tgl_k4" class="{{ $errors->has('tgl_k4') ? ' is-invalid' : '' }}" type="date"
                        name="tgl_k4" value="{{ $updateMode ? $data->tgl_k4 : old('tgl_k4') }}" tabindex="1" required
                        autofocus />
                    <x-input-error for="tgl_k4" />
                </div>
                <div class="form-group col-md-12 col-lg-12 col-12">
                    <x-label for="masalah">{{ __('Masalah') }}</x-label>
                    <textarea name="masalah" id="masalah"
                        class="form-control {{ $errors->has('masalah') ? ' is-invalid' : '' }}">{{ $updateMode ? $data->masalah : old('masalah')}}</textarea>
                    <x-input-error for="masalah" />
                </div>
            </div>
            <x-button class="btn btn-primary btn-block" type="submit">{{ __('Simpan') }}</x-button>
        </form>
    </x-card>
</x-app-layout>
