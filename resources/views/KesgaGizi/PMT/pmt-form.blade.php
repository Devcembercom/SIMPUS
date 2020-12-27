<x-app-layout>
    <x-slot name="header">
        {{ $updateMode ? 'Update Laporan PMT BUMIL' : 'Create Laporan PMT BUMIL' }}
    </x-slot>
    <form method="POST"
        action="{{ $updateMode ? route('lap-pmt-bumil.update',$data->id) : route('lap-pmt-bumil.store')}}"
        class="needs-validation" novalidate="">
        @csrf
        @if ($updateMode)
        @method('patch')
        @endif
        <x-card class="card-primary">
            <x-slot name="title">{{ __('Data Ibu') }}</x-slot>

            <div class="row">
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="nama_bumil">{{ __('Nama Bumil') }}</x-label>
                    <x-input id="nama_bumil" class="{{ $errors->has('nama_bumil') ? ' is-invalid' : '' }}" type="text"
                        name="nama_bumil" value="{{ $updateMode ? $data->nama_bumil : old('nama_bumil') }}" tabindex="1"
                        required autofocus />
                    <x-input-error for="nama_bumil" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="usia">{{ __('Usia Bumil') }}</x-label>
                    <div class="input-group">
                        <x-input id="usia" class="{{ $errors->has('usia') ? ' is-invalid' : '' }}" type="number"
                            name="usia" value="{{ $updateMode ? $data->usia : old('usia') }}" tabindex="1" required
                            min="0" step="1" />
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                {{ __('Tahun') }}
                            </div>
                        </div>
                        <x-input-error for="usia" />
                    </div>
                </div>
            </div>
                <div class="form-group">
                    <x-label for="hamil">{{ __('Hamil') }}
                    </x-label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    {{ __('Anak yang ke') }}
                                </div>
                            </div>
                            <x-input id="hamil" class="{{ $errors->has('hamil') ? ' is-invalid' : '' }}" type="number"
                                name="hamil" value="{{ $updateMode ? $data->hamil : old('hamil') }}" tabindex="1" required
                                min="0" step="1" />
                            <x-input-error for="hamil" />
                    </div>
                </div>
        </x-card>
        <x-card class="card-primary">
            <x-slot name="title">{{ __('Pemberian PMT I') }}</x-slot>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="tgl1">{{ __('Tanggal') }}</x-label>
                    <x-input id="tgl1" class="{{ $errors->has('tgl1') ? ' is-invalid' : '' }}" type="date"
                        name="tgl1"
                        value="{{ $updateMode ? date('Y-m-d',strtotime($data->tgl1)) : old('tgl1') }}"
                        tabindex="1" />
                    <x-input-error for="tgl1" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="bb1">{{ __('BB') }}</x-label>
                    <x-input id="bb1" class="{{ $errors->has('bb1') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="bb1" value="{{ $updateMode ? $data->bb1 : old('bb1') }}" tabindex="1" />
                    <x-input-error for="bb1" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="lila1">{{ __('LILA') }}</x-label>
                    <div class="input-group">
                        <x-input id="lila1" class="{{ $errors->has('lila1') ? ' is-invalid' : '' }}" type="number"
                            name="lila1" value="{{ $updateMode ? $data->lila1 : old('lila1') }}" tabindex="1" required
                            min="0" step="1" />
                        
                        <x-input-error for="lila1" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="hb1">{{ __('HB') }}</x-label>
                    <div class="input-group">
                        <x-input id="hb1" class="{{ $errors->has('hb1') ? ' is-invalid' : '' }}" type="number"
                            name="hb1" value="{{ $updateMode ? $data->hb1 : old('hb1') }}" tabindex="1" required
                            min="0" step="1" />
                        <x-input-error for="hb1" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="jumlah1">{{ __('Jumlah') }}</x-label>
                    <div class="input-group">
                        <x-input id="jumlah1" class="{{ $errors->has('jumlah1') ? ' is-invalid' : '' }}" type="number"
                            name="jumlah1" value="{{ $updateMode ? $data->jumlah1 : old('jumlah1') }}" tabindex="1" required
                            min="0" step="1" />
                        <x-input-error for="jumlah1" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="tt1">{{ __('TT') }}</x-label>
                    <x-input type="text" name="tt1" class="{{ $errors->has('tt1') ? ' is-invalid' : '' }}"
                        required value="{{ $updateMode ? $data->tt1 : old('tt1') }}" />
                    <x-input-error for="tt1" />
                </div>
            </div>
        </x-card>
        <x-card class="card-primary">
            <x-slot name="title">{{ __('Pemberian PMT II') }}</x-slot>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="tgl2">{{ __('Tanggal') }}</x-label>
                    <x-input id="tgl2" class="{{ $errors->has('tgl2') ? ' is-invalid' : '' }}" type="date"
                        name="tgl2"
                        value="{{ $updateMode ? date('Y-m-d',strtotime($data->tgl2)) : old('tgl2') }}"
                        tabindex="1" />
                    <x-input-error for="tgl2" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="bb2">{{ __('BB') }}</x-label>
                    <x-input id="bb2" class="{{ $errors->has('bb2') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="bb2" value="{{ $updateMode ? $data->bb2 : old('bb2') }}" tabindex="1" />
                    <x-input-error for="bb2" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="lila2">{{ __('LILA') }}</x-label>
                    <div class="input-group">
                        <x-input id="lila2" class="{{ $errors->has('lila2') ? ' is-invalid' : '' }}" type="number"
                            name="lila2" value="{{ $updateMode ? $data->lila2 : old('lila2') }}" tabindex="1" required
                            min="0" step="1" />
                        
                        <x-input-error for="lila2" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="hb2">{{ __('HB') }}</x-label>
                    <div class="input-group">
                        <x-input id="hb2" class="{{ $errors->has('hb2') ? ' is-invalid' : '' }}" type="number"
                            name="hb2" value="{{ $updateMode ? $data->hb2 : old('hb2') }}" tabindex="1" required
                            min="0" step="1" />
                        <x-input-error for="hb2" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="jumlah2">{{ __('Jumlah') }}</x-label>
                    <div class="input-group">
                        <x-input id="jumlah2" class="{{ $errors->has('jumlah2') ? ' is-invalid' : '' }}" type="number"
                            name="jumlah2" value="{{ $updateMode ? $data->jumlah2 : old('jumlah2') }}" tabindex="1" required
                            min="0" step="1" />
                        <x-input-error for="jumlah2" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="tt2">{{ __('TT') }}</x-label>
                    <x-input type="text" name="tt2" class="{{ $errors->has('tt2') ? ' is-invalid' : '' }}"
                        required value="{{ $updateMode ? $data->tt2 : old('tt2') }}" />
                    <x-input-error for="tt2" />
                </div>
            </div>
        </x-card>
        <x-card class="card-primary">
            <x-slot name="title">{{ __('Pemberian PMT III') }}</x-slot>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="tgl3">{{ __('Tanggal') }}</x-label>
                    <x-input id="tgl3" class="{{ $errors->has('tgl3') ? ' is-invalid' : '' }}" type="date"
                        name="tgl3"
                        value="{{ $updateMode ? date('Y-m-d',strtotime($data->tgl3)) : old('tgl3') }}"
                        tabindex="1" />
                    <x-input-error for="tgl3" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="bb3">{{ __('BB') }}</x-label>
                    <x-input id="bb3" class="{{ $errors->has('bb3') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="bb3" value="{{ $updateMode ? $data->bb3 : old('bb3') }}" tabindex="1" />
                    <x-input-error for="bb3" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="lila3">{{ __('LILA') }}</x-label>
                    <div class="input-group">
                        <x-input id="lila3" class="{{ $errors->has('lila3') ? ' is-invalid' : '' }}" type="number"
                            name="lila3" value="{{ $updateMode ? $data->lila3 : old('lila3') }}" tabindex="1" required
                            min="0" step="1" />
                        
                        <x-input-error for="lila3" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="hb3">{{ __('HB') }}</x-label>
                    <div class="input-group">
                        <x-input id="hb3" class="{{ $errors->has('hb3') ? ' is-invalid' : '' }}" type="number"
                            name="hb3" value="{{ $updateMode ? $data->hb3 : old('hb3') }}" tabindex="1" required
                            min="0" step="1" />
                        <x-input-error for="hb3" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="jumlah3">{{ __('Jumlah') }}</x-label>
                    <div class="input-group">
                        <x-input id="jumlah3" class="{{ $errors->has('jumlah3') ? ' is-invalid' : '' }}" type="number"
                            name="jumlah3" value="{{ $updateMode ? $data->jumlah3 : old('jumlah3') }}" tabindex="1" required
                            min="0" step="1" />
                        <x-input-error for="jumlah3" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="tt3">{{ __('TT') }}</x-label>
                    <x-input type="text" name="tt3" class="{{ $errors->has('tt3') ? ' is-invalid' : '' }}"
                        required value="{{ $updateMode ? $data->tt3 : old('tt3') }}" />
                    <x-input-error for="tt3" />
                </div>
            </div>
        </x-card>
        <x-button class="btn btn-primary btn-block">{{ __('Simpan Data') }}</x-button>
    </form>
    @push('js') <script>
    </script>
    @endpush
</x-app-layout>
