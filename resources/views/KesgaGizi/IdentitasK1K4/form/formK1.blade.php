<x-app-layout>
    <x-slot name="header">
        {{ $updateMode ? __('Update Identitas K1 Puskesmas') : __('Create Identitas K1 Puskesmas') }}
    </x-slot>

    <x-card class="card-primary">
        <form
            action="{{ $updateMode ? route('updateK1k4',['id' => $data->id , 'type' => 'k1']) : route('storeK1k4',['type' => 'k1']) }}"
            method="post" nonvalidate="" class="needs-validation">
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
                    <x-label for="hamil_ke">{{ __('Hamil ke') }}</x-label>
                    <x-input id="hamil_ke" class="{{ $errors->has('hamil_ke') ? ' is-invalid' : '' }}" type="number"
                        name="hamil_ke" value="{{ $updateMode ? $data->hamil_ke : old('hamil_ke') }}" tabindex="1"
                        required autofocus />
                    <x-input-error for="hamil_ke" />
                </div>
                <div class="form-group col-md-6 col-lg-6 col-12">
                    <x-label for="hpht">{{ __('HPHT') }}</x-label>
                    <x-input id="hpht" class="{{ $errors->has('hpht') ? ' is-invalid' : '' }}" type="date" name="hpht"
                        value="{{ $updateMode ? $data->hpht : old('hpht') }}" tabindex="1" required autofocus />
                    <x-input-error for="hpht" />
                </div>
                <div class="form-group col-md-6 col-lg-6 col-12">
                    <x-label for="usia_hamil">{{ __('Usia Kehamilan') }}</x-label>
                    <div class="input-group">
                        <x-input id="usia_hamil" class="{{ $errors->has('usia_hamil') ? ' is-invalid' : '' }}"
                            type="number" name="usia_hamil"
                            value="{{ $updateMode ? $data->usia_hamil : old('usia_hamil')}}" tabindex="1" required
                            min="0" step="1" />
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                {{ __('Bulan') }}
                            </div>
                        </div>
                        <x-input-error for="usia_hamil" />
                    </div>
                </div>
                <div class="form-group col-md-6 col-lg-6 col-12">
                    <x-label for="jenis_resiko">{{ __('Jenis Resiko') }}</x-label>
                    <x-input id="jenis_resiko" class="{{ $errors->has('jenis_resiko') ? ' is-invalid' : '' }}"
                        type="text" name="jenis_resiko"
                        value="{{ $updateMode ? $data->jenis_resiko : old('jenis_resiko') }}" tabindex="1" required
                        autofocus />
                    <x-input-error for="jenis_resiko" />
                </div>
                <div class="form-group col-md-6 col-lg-6 col-12">
                    <x-label for="dpt_buku">{{ __('DPT Buku') }}</x-label>
                    <x-input id="dpt_buku" class="{{ $errors->has('dpt_buku') ? ' is-invalid' : '' }}" type="text"
                        name="dpt_buku" value="{{ $updateMode ? $data->dpt_buku : old('dpt_buku') }}" tabindex="1"
                        required autofocus />
                    <x-input-error for="dpt_buku" />
                </div>
            </div>
            <x-button class="btn btn-primary btn-block" type="submit">{{ __('Simpan') }}</x-button>
        </form>
    </x-card>
</x-app-layout>
