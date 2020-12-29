<form action="" method="post" novalidate="" class="needs-validation">
    @csrf
    <x-card>
        <x-slot name="title"> {{ __('General Settings') }} </x-slot>

        <p class="text-muted">{{ __('General settings such as, site title, site description, address and so
            on.') }}
        </p>
        <div class="form-group row align-items-center">
            <x-label for="site_title" class="form-control-label col-sm-3 text-md-right">{{ __('Site
                Title') }}</x-label>
            <div class="col-sm-6 col-md-9">
                <x-input type="text" name="site_title" class="form-control" id="site_title" />
                <x-input-error for="site_title" />
            </div>
        </div>
        <div class="form-group row align-items-center">
            <x-label for="site_logo" class="form-control-label col-sm-3 text-md-right">
                {{ __('Site Logo') }}
            </x-label>
            <div class="col-sm-6 col-md-9">
                <figure class="mb-4 ">
                    <img src="{{ asset('assets/img/news/img01.jpg') }}" width="40%" height="40%" alt="}"
                        class="imagecheck-image">
                </figure>
                <div class="custom-file">
                    <x-input type="file" name="site_logo" accept="image/*" class="custom-file-input" id="site_logo" />
                    <label class="custom-file-label">{{ __('Choose File') }}</label>
                </div>
                <div class="form-text text-muted">{{ __('The image must have a maximum size of 2MB') }}</div>
                <x-input-error for="site_logo" />
            </div>
        </div>

        <div class="card-footer bg-whitesmoke text-md-right">
            <button class="btn btn-primary" id="save-btn">{{ __('Save Changes') }}</button>
            <button class="btn btn-secondary" type="reset">{{ __('Reset') }}</button>
        </div>
    </x-card>
</form>
