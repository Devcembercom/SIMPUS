<x-app-layout>
    <x-slot name="header">
        {{ $updateMode ? 'Update Identitas Persalinan' : 'Create Identitas Persalinan' }}
    </x-slot>
    <form method="POST"
        action="{{ $updateMode ? route('identitas-persalinan.update',$data->id) : route('identitas-persalinan.store')}}"
        class="needs-validation" novalidate="">
        @csrf
        @if ($updateMode)
        @method('patch')
        @endif
        <x-card class="card-primary">
            <x-slot name="title">{{ __('Data Ibu') }}</x-slot>

            <div class="row">
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="nama_ibu">{{ __('Nama Ibu') }}</x-label>
                    <x-input id="nama_ibu" class="{{ $errors->has('nama_ibu') ? ' is-invalid' : '' }}" type="text"
                        name="nama_ibu" value="{{ $updateMode ? $data->nama_ibu : old('nama_ibu') }}" tabindex="1"
                        required autofocus />
                    <x-input-error for="nama_ibu" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="umur">{{ __('Umur Ibu') }}</x-label>
                    <div class="input-group">
                        <x-input id="umur" class="{{ $errors->has('umur') ? ' is-invalid' : '' }}" type="number"
                            name="umur" value="{{ $updateMode ? $data->umur : old('umur') }}" tabindex="1" required
                            min="0" step="1" />
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                {{ __('Tahun') }}
                            </div>
                        </div>
                        <x-input-error for="umur" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <x-label for="nama_suami">{{ __('Nama Suami') }}</x-label>
                <x-input id="nama_suami" class="{{ $errors->has('nama_suami') ? ' is-invalid' : '' }}" type="text"
                    name="nama_suami" value="{{ $updateMode ? $data->nama_suami : old('nama_suami') }}" tabindex="1"
                    required />
                <x-input-error for="nama_suami" />
            </div>
            <div class="form-group">
                <x-label for="alamat">{{ __('Alamat') }}</x-label>
                <x-textarea name="alamat" id="alamat">{!! $updateMode ? $data->alamat : old('alamat') !!}</x-textarea>
                <x-input-error for="alamat" />
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="tgl_partus">{{ __('Tanggal Partus') }}</x-label>
                    <x-input type="date" name="tgl_partus" class="{{ $errors->has('tgl_partus') ? ' is-invalid' : '' }}"
                        required
                        value="{{ $updateMode ? date('Y-m-d',strtotime($data->tgl_partus)) : old('tgl_partus') }}"
                        />
                    <x-input-error for="tgl_partus" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="kondisi_ibu">{{ __('Kondisi Ibu (default sehat)') }}</x-label>
                    <x-input id="kondisi_ibu" class="{{ $errors->has('kondisi_ibu') ? ' is-invalid' : '' }}" type="text"
                        name="kondisi_ibu" value="{{ $updateMode ? $data->kondisi_ibu : old('kondisi_ibu') }}"
                        tabindex="1" />
                    <x-input-error for="kondisi_ibu" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="jml_darah">{{ __('Jumlah Darah') }}</x-label>
                    <div class="input-group">
                        <x-input type="text" name="jml_darah"
                            class="{{ $errors->has('jml_darah') ? ' is-invalid' : '' }}" required
                            value="{{ $updateMode ? $data->jml_darah : old('jml_darah') }}" />
                        <x-input-error for="jml_darah" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="partograf">{{ __('Partograf') }}</x-label>
                    <div class="input-group">
                        <select name="partograf" id="partograf"
                            class="form-control {{ $errors->has('partograf') ? ' is-invalid' : '' }}">
                            @php
                            $daPar = $updateMode ? $data->partograf : old('partograf');
                            @endphp
                            <option value="1" {{ $daPar == '1' ? 'selected' : '' }}>{{ __('Ada') }}</option>
                            <option value="0" {{ $daPar == '0' ? 'selected' : '' }}>{{ __('Tidak') }}</option>
                        </select>
                        <x-input-error for="partograf" />
                    </div>
                </div>
            </div>
        </x-card>
        <x-card class="card-primary">
            <x-slot name="title">{{ __('Data Bayi') }}</x-slot>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="kondisi_bayi">{{ __('Kondisi Bayi') }}</x-label>
                    <x-input type="text" name="kondisi_bayi"
                        class="{{ $errors->has('kondisi_bayi') ? ' is-invalid' : '' }}" required
                        value="{{ $updateMode ? $data->kondisi_bayi : old('kondisi_bayi') }}" />
                    <x-input-error for="kondisi_bayi" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="jk_bayi">{{ __('Jenis Kelamin Bayi') }}</x-label>
                    <div class="input-group">
                        <select name="jk_bayi" id="jk_bayi"
                            class="form-control {{ $errors->has('jk_bayi') ? ' is-invalid' : '' }}">
                            @php
                            $daJk = $updateMode ? $data->jk_bayi : old('jk_bayi');
                            @endphp
                            <option value="1" {{ $daJk == '1' ? 'selected' : '' }}>{{ __('Laki-Laki') }}
                            </option>
                            <option value="0" {{ $daJk == '0' ? 'selected' : '' }}>{{ __('Perempuan') }}
                            </option>
                        </select>
                        <x-input-error for="jk_bayi" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="bbl">{{ __('BBL (gram)') }}</x-label>
                    <x-input id="bbl" class="{{ $errors->has('bbl') ? ' is-invalid' : '' }}" type="number" min="0"
                        step="1" name="bbl" value="{{ $updateMode ? $data->bbl : old('bbl') }}" tabindex="1" />
                    <x-input-error for="bbl" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="imd">{{ __('IMD') }}</x-label>
                    <div class="input-group">
                        <select name="imd" id="imd" class="form-control {{ $errors->has('imd') ? ' is-invalid' : '' }}">
                            @php
                            $daImd = $updateMode ? $data->imd : old('imd');
                            @endphp
                            <option value="1" {{ $daImd == '1' ? 'selected' : '' }}>{{ __('Ya') }}</option>
                            <option value="0" {{ $daImd == '0' ? 'selected' : '' }}>{{ __('Tidak') }}</option>
                        </select>
                        <x-input-error for="imd" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="tgl_unijek">{{ __('Tanggal Unijek') }}</x-label>
                    <x-input id="tgl_unijek" class="{{ $errors->has('tgl_unijek') ? ' is-invalid' : '' }}" type="date"
                         name="tgl_unijek"
                        value="{{ $updateMode ? date('Y-m-d',strtotime($data->tgl_unijek)) : old('tgl_unijek') }}"
                        tabindex="1" />
                    <x-input-error for="tgl_unijek" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="tgl_vit_k">{{ __('Tanggal Vit K') }}</x-label>
                    <x-input id="tgl_vit_k" class="{{ $errors->has('tgl_vit_k') ? ' is-invalid' : '' }}" type="date"
                         name="tgl_vit_k"
                        value="{{ $updateMode ? date('Y-m-d',strtotime($data->tgl_vit_k)) : old('tgl_vit_k') }}"
                        tabindex="1" />
                    <x-input-error for="tgl_vit_k" />
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="jns_persalinan">{{ __('Jenis Persalinan') }}</x-label>
                    <div class="input-group">
                        <select name="jns_persalinan" id="jns_persalinan"
                            class="form-control {{ $errors->has('jns_persalinan') ? ' is-invalid' : '' }}">
                            @php
                            $daOp = $updateMode ? $data->jns_persalinan : old('jns_persalinan');
                            @endphp
                            <option value="n" {{ $daOp == 'n' ? 'selected' : '' }}>{{ __('Normal') }}
                            </option>
                            <option value="sp" {{ $daOp == 'sp' ? 'selected' : '' }}>{{ __('Spontan') }}
                            </option>
                            <option value="sc" {{ $daOp == 'sc' ? 'selected' : '' }}>
                                {{ __('Operasi sesar') }}
                            </option>
                            <option value="in" {{ $daOp == 'in' ? 'selected' : '' }}>
                                {{ __('Induksi') }}
                            </option>
                            <option value="ve" {{ $daOp == 've' ? 'selected' : '' }}>
                                {{ __('Vakum') }}
                            </option>
                        </select>
                        <x-input-error for="jns_persalinan" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12 form-group">
                    <x-label for="petugas">{{ __('Petugas') }}</x-label>
                    <x-input type="text" name="petugas" class="{{ $errors->has('petugas') ? ' is-invalid' : '' }}"
                        required value="{{ $updateMode ? $data->petugas : old('petugas') }}" />
                    <x-input-error for="petugas" />
                </div>
            </div>
            <div class="form-group">
                <x-label for="status_bayar">{{ __('Status Bayar') }}</x-label>
                <x-input type="text" name="status_bayar" class="{{ $errors->has('status_bayar') ? ' is-invalid' : '' }}"
                    required value="{{ $updateMode ? $data->status_bayar : old('status_bayar') }}" />
                <x-input-error for="status_bayar" />
            </div>
        </x-card>
        <x-button class="btn btn-primary btn-block">{{ __('Simpan Data') }}</x-button>
    </form>
    @push('js') <script>
    </script>
    @endpush
</x-app-layout>
