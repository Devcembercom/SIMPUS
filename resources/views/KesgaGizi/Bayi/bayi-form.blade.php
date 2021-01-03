<x-app-layout>
    <x-slot name="header">
        {{ $updateMode ? 'Update FORMULIR REKAPITULASI BAYI KURANG DARI 6 BULAN MENDAPAT ASI' : 'Create FORMULIR REKAPITULASI BAYI KURANG DARI 6 BULAN MENDAPAT ASI' }}
    </x-slot>
    <form method="POST"
        action="{{ $updateMode ? route('lap-bayi.update',$data->id) : route('lap-bayi.store')}}"
        class="needs-validation" novalidate="">
        @csrf
        @if ($updateMode)
        @method('patch')
        @endif
        <x-card class="card-primary">
            <x-slot name="title">{{ __('Data Posyandu') }}</x-slot>

            <div class="row">
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="nama_jorong">{{ __('Nama Jorong') }}</x-label>
                    <x-input id="nama_jorong" class="{{ $errors->has('nama_jorong') ? ' is-invalid' : '' }}" type="text"
                        name="nama_jorong" value="{{ $updateMode ? $data->nama_jorong : old('nama_jorong') }}" tabindex="1"
                        required autofocus />
                    <x-input-error for="nama_jorong" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="nama_posyandu">{{ __('Nama Posyandu') }}</x-label>
                    <x-input id="nama_posyandu" class="{{ $errors->has('nama_posyandu') ? ' is-invalid' : '' }}" type="text"
                        name="nama_posyandu" value="{{ $updateMode ? $data->nama_posyandu : old('nama_posyandu') }}" tabindex="1"
                        required autofocus />
                    <x-input-error for="nama_posyandu" />
                </div>
            </div>
            <div class="form-group">
                <x-label for="jumlah_umur">{{ __('Jumlah Sasaran Bayi Umur 0-6 bulan ') }}</x-label>
                <x-input id="jumlah_umur" class="{{ $errors->has('jumlah_umur') ? ' is-invalid' : '' }}" type="number" min="0"
                    step="1" name="jumlah_umur" value="{{ $updateMode ? $data->jumlah_umur : old('jumlah_umur') }}" tabindex="1" />
                <x-input-error for="jumlah_umur" />
            </div>
        </x-card>


        
        <x-card class="card-primary">
            <x-slot name="title">{{ __('0 Bulan') }}</x-slot>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="jumlah_bayi1">{{ __('Jumlah Bayi') }}</x-label>
                    <x-input id="jumlah_bayi1" class="{{ $errors->has('jumlah_bayi1') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="jumlah_bayi1" value="{{ $updateMode ? $data->jumlah_bayi1 : old('jumlah_bayi1') }}" tabindex="1" />
                    <x-input-error for="jumlah_bayi1" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="eklusif1">{{ __('Jumlah bayi masih ASI Eksklusif') }}</x-label>
                    <x-input id="eklusif1" class="{{ $errors->has('eklusif1') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="eklusif1" value="{{ $updateMode ? $data->eklusif1 : old('eklusif1') }}" tabindex="1" />
                    <x-input-error for="eklusif1" />
                </div>
            </div>
            <div class="form-group">
                <x-label for="persen1">{{ __('Persentase') }}</x-label>
                <div class="input-group">
                    <x-input id="persen1" class="{{ $errors->has('persen1') ? ' is-invalid' : '' }}" type="number"
                        name="persen1" value="{{ $updateMode ? $data->persen1 : old('persen1') }}" tabindex="1" required
                        min="0" step="1" />
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                {{ __('%') }}
                            </div>
                        </div>
                    <x-input-error for="persen1" />
                </div>
            </div>
        </x-card>


        <x-card class="card-primary">
            <x-slot name="title">{{ __('1 Bulan') }}</x-slot>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="jumlah_bayi2">{{ __('Jumlah Bayi') }}</x-label>
                    <x-input id="jumlah_bayi2" class="{{ $errors->has('jumlah_bayi2') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="jumlah_bayi2" value="{{ $updateMode ? $data->jumlah_bayi2 : old('jumlah_bayi2') }}" tabindex="1" />
                    <x-input-error for="jumlah_bayi2" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="eklusif2">{{ __('Jumlah bayi masih ASI Eksklusif') }}</x-label>
                    <x-input id="eklusif2" class="{{ $errors->has('eklusif2') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="eklusif2" value="{{ $updateMode ? $data->eklusif2 : old('eklusif2') }}" tabindex="1" />
                    <x-input-error for="eklusif2" />
                </div>
            </div>
            <div class="form-group">
                <x-label for="persen2">{{ __('Persentase') }}</x-label>
                <div class="input-group">
                    <x-input id="persen2" class="{{ $errors->has('persen2') ? ' is-invalid' : '' }}" type="number"
                        name="persen2" value="{{ $updateMode ? $data->persen2 : old('persen2') }}" tabindex="1" required
                        min="0" step="1" />
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                {{ __('%') }}
                            </div>
                        </div>
                    <x-input-error for="persen2" />
                </div>
            </div>
        </x-card>


        <x-card class="card-primary">
            <x-slot name="title">{{ __('2 Bulan') }}</x-slot>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="jumlah_bayi3">{{ __('Jumlah Bayi') }}</x-label>
                    <x-input id="jumlah_bayi3" class="{{ $errors->has('jumlah_bayi3') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="jumlah_bayi3" value="{{ $updateMode ? $data->jumlah_bayi3 : old('jumlah_bayi3') }}" tabindex="1" />
                    <x-input-error for="jumlah_bayi3" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="eklusif3">{{ __('Jumlah bayi masih ASI Eksklusif') }}</x-label>
                    <x-input id="eklusif3" class="{{ $errors->has('eklusif3') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="eklusif3" value="{{ $updateMode ? $data->eklusif3 : old('eklusif3') }}" tabindex="1" />
                    <x-input-error for="eklusif3" />
                </div>
            </div>
            <div class="form-group">
                <x-label for="persen3">{{ __('Persentase') }}</x-label>
                <div class="input-group">
                    <x-input id="persen3" class="{{ $errors->has('persen3') ? ' is-invalid' : '' }}" type="number"
                        name="persen3" value="{{ $updateMode ? $data->persen3 : old('persen3') }}" tabindex="1" required
                        min="0" step="1" />
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                {{ __('%') }}
                            </div>
                        </div>
                    <x-input-error for="persen3" />
                </div>
            </div>
        </x-card>

        <x-card class="card-primary">
            <x-slot name="title">{{ __('3 Bulan') }}</x-slot>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="jumlah_bayi4">{{ __('Jumlah Bayi') }}</x-label>
                    <x-input id="jumlah_bayi4" class="{{ $errors->has('jumlah_bayi4') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="jumlah_bayi4" value="{{ $updateMode ? $data->jumlah_bayi4 : old('jumlah_bayi4') }}" tabindex="1" />
                    <x-input-error for="jumlah_bayi4" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="eklusif4">{{ __('Jumlah bayi masih ASI Eksklusif') }}</x-label>
                    <x-input id="eklusif4" class="{{ $errors->has('eklusif4') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="eklusif4" value="{{ $updateMode ? $data->eklusif4 : old('eklusif4') }}" tabindex="1" />
                    <x-input-error for="eklusif4" />
                </div>
            </div>
            <div class="form-group">
                <x-label for="persen4">{{ __('Persentase') }}</x-label>
                <div class="input-group">
                    <x-input id="persen4" class="{{ $errors->has('persen4') ? ' is-invalid' : '' }}" type="number"
                        name="persen4" value="{{ $updateMode ? $data->persen4 : old('persen4') }}" tabindex="1" required
                        min="0" step="1" />
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                {{ __('%') }}
                            </div>
                        </div>
                    <x-input-error for="persen4" />
                </div>
            </div>
        </x-card>

        <x-card class="card-primary">
            <x-slot name="title">{{ __('4 Bulan') }}</x-slot>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="jumlah_bayi5">{{ __('Jumlah Bayi') }}</x-label>
                    <x-input id="jumlah_bayi5" class="{{ $errors->has('jumlah_bayi5') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="jumlah_bayi5" value="{{ $updateMode ? $data->jumlah_bayi5 : old('jumlah_bayi5') }}" tabindex="1" />
                    <x-input-error for="jumlah_bayi5" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="eklusif5">{{ __('Jumlah bayi masih ASI Eksklusif') }}</x-label>
                    <x-input id="eklusif5" class="{{ $errors->has('eklusif5') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="eklusif5" value="{{ $updateMode ? $data->eklusif5 : old('eklusif5') }}" tabindex="1" />
                    <x-input-error for="eklusif5" />
                </div>
            </div>
            <div class="form-group">
                <x-label for="persen3">{{ __('Persentase') }}</x-label>
                <div class="input-group">
                    <x-input id="persen5" class="{{ $errors->has('persen5') ? ' is-invalid' : '' }}" type="number"
                        name="persen5" value="{{ $updateMode ? $data->persen5 : old('persen5') }}" tabindex="1" required
                        min="0" step="1" />
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                {{ __('%') }}
                            </div>
                        </div>
                    <x-input-error for="persen5" />
                </div>
            </div>
        </x-card>

        <x-card class="card-primary">
            <x-slot name="title">{{ __('5 Bulan') }}</x-slot>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="jumlah_bayi6">{{ __('Jumlah Bayi') }}</x-label>
                    <x-input id="jumlah_bayi6" class="{{ $errors->has('jumlah_bayi6') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="jumlah_bayi6" value="{{ $updateMode ? $data->jumlah_bayi6 : old('jumlah_bayi6') }}" tabindex="1" />
                    <x-input-error for="jumlah_bayi6" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="eklusif6">{{ __('Jumlah bayi masih ASI Eksklusif') }}</x-label>
                    <x-input id="eklusif6" class="{{ $errors->has('eklusif6') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="eklusif6" value="{{ $updateMode ? $data->eklusif6 : old('eklusif6') }}" tabindex="1" />
                    <x-input-error for="eklusif6" />
                </div>
            </div>
            <div class="form-group">
                <x-label for="persen6">{{ __('Persentase') }}</x-label>
                <div class="input-group">
                    <x-input id="persen6" class="{{ $errors->has('persen6') ? ' is-invalid' : '' }}" type="number"
                        name="persen6" value="{{ $updateMode ? $data->persen6 : old('persen6') }}" tabindex="1" required
                        min="0" step="1" />
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                {{ __('%') }}
                            </div>
                        </div>
                    <x-input-error for="persen6" />
                </div>
            </div>
        </x-card>

        <x-card class="card-primary">
            <x-slot name="title">{{ __('0-5 Bulan') }}</x-slot>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="jumlah_bayi7">{{ __('Jumlah Bayi') }}</x-label>
                    <x-input id="jumlah_bayi7" class="{{ $errors->has('jumlah_bayi7') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="jumlah_bayi7" value="{{ $updateMode ? $data->jumlah_bayi7 : old('jumlah_bayi7') }}" tabindex="1" />
                    <x-input-error for="jumlah_bayi7" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="eklusif7">{{ __('Jumlah bayi masih ASI Eksklusif') }}</x-label>
                    <x-input id="eklusif7" class="{{ $errors->has('eklusif7') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="eklusif7" value="{{ $updateMode ? $data->eklusif7 : old('eklusif7') }}" tabindex="1" />
                    <x-input-error for="eklusif7" />
                </div>
            </div>
            <div class="form-group">
                <x-label for="persen7">{{ __('Persentase ') }}</x-label>
                <div class="input-group">
                    <x-input id="persen7" class="{{ $errors->has('persen7') ? ' is-invalid' : '' }}" type="number"
                        name="persen7" value="{{ $updateMode ? $data->persen7 : old('persen7') }}" tabindex="1" required
                        min="0" step="1" />
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                {{ __('%') }}
                            </div>
                        </div>
                    <x-input-error for="persen7" />
                </div>
            </div>
        </x-card>
        <x-button class="btn btn-primary btn-block">{{ __('Simpan Data') }}</x-button>
    </form>
    @push('js') <script>
    </script>
    @endpush
</x-app-layout>
