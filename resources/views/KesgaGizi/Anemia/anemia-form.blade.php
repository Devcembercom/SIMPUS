<x-app-layout>
    <x-slot name="header">
        {{ $updateMode ? 'Update LAPORAN IBU HAMIL KEK DAN ANEMIA PUSKESMAS MUNGO' : 'Create LAPORAN IBU HAMIL KEK DAN ANEMIA PUSKESMAS MUNGO' }}
    </x-slot>
    <form method="POST"
        action="{{ $updateMode ? route('lap-anemia.update',$data->id) : route('lap-anemia.store')}}"
        class="needs-validation" novalidate="">
        @csrf
        @if ($updateMode)
        @method('patch')
        @endif
        <x-card class="card-primary">
            <x-slot name="title">{{ __('Data Ibu') }}</x-slot>

            <div class="row">
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="nama_ibu">{{ __('Nama I Ibu') }}</x-label>
                    <x-input id="nama_ibu" class="{{ $errors->has('nama_ibu') ? ' is-invalid' : '' }}" type="text"
                        name="nama_ibu" value="{{ $updateMode ? $data->nama_ibu : old('nama_ibu') }}" tabindex="1"
                        required autofocus />
                    <x-input-error for="nama_ibu" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="alamat">{{ __('Alamat') }}</x-label>
                    <x-textarea name="alamat" id="alamat">{!! $updateMode ? $data->alamat : old('alamat') !!}</x-textarea>
                    <x-input-error for="alamat" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="lahir">{{ __('Tanggal Lahir') }}</x-label>
                    <x-input id="lahir" class="{{ $errors->has('lahir') ? ' is-invalid' : '' }}" type="date"
                        name="lahir"
                        value="{{ $updateMode ? date('Y-m-d',strtotime($data->lahir)) : old('lahir') }}"
                        tabindex="1" />
                    <x-input-error for="lahir" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="ditemukan">{{ __('Tanggal Ditemukan') }}</x-label>
                    <x-input id="ditemukan" class="{{ $errors->has('ditemukan') ? ' is-invalid' : '' }}" type="date"
                        name="ditemukan"
                        value="{{ $updateMode ? date('Y-m-d',strtotime($data->ditemukan)) : old('ditemukan') }}"
                        tabindex="1" />
                    <x-input-error for="ditemukan" />
                </div>
            </div>
        </x-card>
        <x-card class="card-primary">
            <x-slot name="title">{{ __('ANTROPOMETRI') }}</x-slot>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="bb">{{ __('BB') }}</x-label>
                    <x-input id="bb" class="{{ $errors->has('bb') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="bb" value="{{ $updateMode ? $data->bb : old('bb') }}" tabindex="1" />
                    <x-input-error for="bb" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="tb">{{ __('TB') }}</x-label>
                    <x-input id="tb" class="{{ $errors->has('tb') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="tb" value="{{ $updateMode ? $data->tb : old('tb') }}" tabindex="1" />
                    <x-input-error for="tb" />
                </div>
                
            </div>
            <div class="form-group">
                <x-label for="lila">{{ __('Lila') }}</x-label>
                <x-input id="lila" class="{{ $errors->has('lila') ? ' is-invalid' : '' }}" type="number"
                    name="lila" value="{{ $updateMode ? $data->lila : old('lila') }}" tabindex="1"
                    required />
                <x-input-error for="lila" />
            </div>
        </x-card>
        <x-card class="card-primary">
            <x-slot name="title">{{ __('PEMERIKSAAN LABORATORIUM') }}</x-slot>
            <div class="row">
                
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="hb">{{ __('HB') }}</x-label>
                    <x-input type="text" name="hb" class="{{ $errors->has('hb') ? ' is-invalid' : '' }}"
                        required value="{{ $updateMode ? $data->hb : old('hb') }}" />
                    <x-input-error for="hb" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="protein">{{ __('Protein Urin') }}</x-label>
                    <x-input type="text" name="protein" class="{{ $errors->has('protein') ? ' is-invalid' : '' }}"
                        required value="{{ $updateMode ? $data->protein : old('protein') }}" />
                    <x-input-error for="protein" />
                </div>
            </div>
            <div class="form-group">
                <x-label for="siha">{{ __('SIHA (HIV/SIPILIS/HEPATITIS)') }}</x-label>
                <x-input type="text" name="siha" class="{{ $errors->has('siha') ? ' is-invalid' : '' }}"
                    required value="{{ $updateMode ? $data->siha : old('siha') }}" />
                <x-input-error for="siha" />
            </div>
        </x-card>
        <x-card class="card-primary">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-12 form-group">
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
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="intervansi">{{ __('Intervensi/tindakan yg dilakukan') }}</x-label>
                    <x-input id="intervansi" class="{{ $errors->has('intervansi') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="intervansi" value="{{ $updateMode ? $data->intervansi : old('intervansi') }}" tabindex="1" />
                    <x-input-error for="intervansi" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="nama_suami">{{ __('Nama Suami') }}</x-label>
                    <x-input type="text" name="nama_suami" class="{{ $errors->has('nama_suami') ? ' is-invalid' : '' }}"
                        required value="{{ $updateMode ? $data->nama_suami : old('nama_suami') }}" />
                    <x-input-error for="nama_suami" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="pekerjaan">{{ __('Pekerjaan') }}</x-label>
                    <x-input type="text" name="pekerjaan" class="{{ $errors->has('pekerjaan') ? ' is-invalid' : '' }}"
                        required value="{{ $updateMode ? $data->pekerjaan : old('pekerjaan') }}" />
                    <x-input-error for="pekerjaan" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="status">{{ __('STATUS KK') }} <i>(G/NG)</i></x-label>
                    <x-input type="text" name="status" class="{{ $errors->has('status') ? ' is-invalid' : '' }}"
                        required value="{{ $updateMode ? $data->status : old('status') }}" />
                    <x-input-error for="status" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="bpjs">{{ __('KEPEMILIKAN BPJS') }}</x-label>
                    <x-input type="text" name="bpjs" class="{{ $errors->has('bpjs') ? ' is-invalid' : '' }}"
                        required value="{{ $updateMode ? $data->bpjs : old('bpjs') }}" />
                    <x-input-error for="bpjs" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="kasus">{{ __('KASUS LAMA /BARU') }}</x-label>
                    <x-input type="text" name="kasus" class="{{ $errors->has('kasus') ? ' is-invalid' : '' }}"
                        required value="{{ $updateMode ? $data->kasus : old('kasus') }}" />
                    <x-input-error for="kasus" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="ket">{{ __('KETERANGAN') }}</x-label>
                    <x-input type="text" name="ket" class="{{ $errors->has('ket') ? ' is-invalid' : '' }}"
                        required value="{{ $updateMode ? $data->ket : old('ket') }}" />
                    <x-input-error for="ket" />
                </div>
                
            </div>
        </x-card>
        <x-button class="btn btn-primary btn-block">{{ __('Simpan Data') }}</x-button>
    </form>
    @push('js') <script>
    </script>
    @endpush
</x-app-layout>
