<form action="{{ route('settings.updateGeneral') }}" method="post" enctype="multipart/form-data">
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
                <x-input type="text" required name="site_title" value="{{ $siteTitle->val }}" class="form-control"
                    id="site_title" />
                <x-input-error for="site_title" />
            </div>
        </div>
        <div class="form-group row align-items-center">
            <x-label for="site_logo" class="form-control-label col-sm-3 text-md-right">
                {{ __('Site Logo') }}
            </x-label>
            <div class="col-sm-6 col-md-9">
                <figure class="mb-4 " id="imagePreview">
                </figure>
                <input type="file" onchange="return imageval()" class="form-control" name="site_logo" id="file"
                    accept=".jpg, .png, .jpeg, .gif, .bmp">
                <div class="form-text text-muted">{{ __('The image must have a maximum size of 2MB') }}</div>
                <x-input-error for="site_logo" />
            </div>
        </div>

        <div class="card-footer bg-whitesmoke text-md-right">
            <button class="btn btn-primary" type="submit" id="save-btn">{{ __('Save Changes') }}</button>
            <button class="btn btn-secondary" type="reset">{{ __('Reset') }}</button>
        </div>
    </x-card>
</form>
@push('js')
<script>
    function imageval(){
        var fileInput = document.getElementById('file');
        var filePath = fileInput.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        if(!allowedExtensions.exec(filePath)){
            alert('Please upload file having extensions .jpeg/.jpg/.png/.gif/.svg only.');
            fileInput.value = '';
            return false;
        }else{
            //Image preview
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imagePreview').innerHTML = '<img width="40%" height="40%" alt="}" class="imagecheck-image" src="'+e.target.result+'"/>';
                };
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    }
</script>
@endpush
