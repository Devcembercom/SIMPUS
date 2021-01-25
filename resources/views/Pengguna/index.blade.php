<x-app-layout>
    <x-slot name="header">
        {{ __('Tambah Pengguna') }}
    </x-slot>
    <x-slot name="button">
        
    </x-slot>
    <x-card>
        <div class="card">
            <div class="card-header">
              <h4>User Regi</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-4">
                  <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">Formulir</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false">Data Pengguna</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                    </li>
                  </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-8">
                  <div class="tab-content no-padding" id="myTab2Content">
                    <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">
                        <form method="POST" action="{{ route('pengguna-tambah') }}" class="needs-validation"
                                      novalidate="">
                                      @csrf
                              <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input id="name" type="text" class="form-control" name="name">
                                        <x-input-error for="name" />
                                    </div>
                                    <div class="form-group">
                                      <label class="form-label">Hak Akses</label>
                                      <div class="selectgroup selectgroup-pills">
                                          <label class="selectgroup-item">
                                          <input type="radio" name="role" value="admin" class="selectgroup-input" checked="">
                                          <span class="selectgroup-button selectgroup-button-icon"><i class="fad fa-users-crown"></i></span>
                                        </label>
                                          <label class="selectgroup-item">
                                          <input type="radio" name="role" value="bidan" class="selectgroup-input">
                                          <span class="selectgroup-button selectgroup-button-icon"><i class="fad fa-users-medical"></i></span>
                                        </label>
                                      </div>
                                  </div>
                                    <div class="form-group">
                                      <label for="email">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-mail-bulk"></i>
                                                </div>
                                            </div>
                                            
                                            <input id="email" type="email" required class="form-control" name="email">
                                            <x-input-error for="email" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <label>No.Hp</label>
                                      <div class="input-group">
                                          <div class="input-group-prepend">
                                              <div class="input-group-text">
                                                  <i class="fas fa-phone"></i>
                                              </div>
                                          </div>
                                          <input id="hp" type="text" required class="form-control" name="hp">
                                            <x-input-error for="hp" />
                                      </div>
                                  </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-lock"></i>
                                                </div>
                                            </div>
                                            <input id="password" type="password" class="form-control pwstrength"
                                                      data-indicator="pwindicator" name="password" maxlength="12">
                                        </div>
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <label>Konfirmasi Password</label>
                                      <div class="input-group">
                                          <div class="input-group-prepend">
                                              <div class="input-group-text">
                                                  <i class="fas fa-lock"></i>
                                              </div>
                                          </div>
                                          <input id="password2" type="password" class="form-control pwstrength"
                                                    data-indicator="pwindicator"  name="password_confirmation"  maxlength="12">
                                      </div>
                                      <div id="pwindicator" class="pwindicator">
                                          <div class="bar"></div>
                                          <div class="label"></div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card-footer text-right">
                                <button class="btn btn-primary">Submit</button>
                              </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">
                      <table class="table table-light">
                        <thead align="center">
                            <tr>
                                <td>{{ __('No') }}</td>
                                <td>{{ __('Nama') }}</td>
                                <td>{{ __('Role') }}</td>
                                <td>{{ __('Aksi') }}</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody align="center">
                            @forelse ($datas as $data => $dat)
                            <tr>
                                <td>{{$data + $datas->firstItem() }}</td>
                                <td>{{$dat->name }}</td>
                                <td>
                                    <input type="checkbox" data-id="{{ $dat->id }}" name="role" class="js-switch" {{ $dat->role == 'admin' ? 'checked' : '' }}>
                                </td>
                                <td>
                                  <a href="{{route('pengguna-delete',$dat->id)}}" onclick="confirmDelete($dat->id)" id="role" class="btn btn-danger btn-sm"><i class="fad fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">Tidak ada data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    </div>
                    <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">
                      Vestibulum imperdiet odio sed neque ultricies, ut dapibus mi maximus. Proin ligula massa, gravida in lacinia efficitur, hendrerit eget mauris. Pellentesque fermentum, sem interdum molestie finibus, nulla diam varius leo, nec varius lectus elit id dolor. Nam malesuada orci non ornare vulputate. Ut ut sollicitudin magna. Vestibulum eget ligula ut ipsum venenatis ultrices. Proin bibendum bibendum augue ut luctus.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </x-card>

</x-app-layout>
@push('js')
<script>let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

  elems.forEach(function(html) {
      let switchery = new Switchery(html,  { size: 'small' });
  });</script>
  <script>
      $(document).ready(function(){
      $('.js-switch').change(function () {
      let role = $(this).prop('checked') === true ? 'admin' : 'bidan';
      let userId = $(this).data('id');
      $.ajax({
          type: "GET",
          url: '{{ route('pengguna-update') }}',
          data: {'role': role, 'user_id': userId},
          success: function (data) {
              console.log(data.message);
          }
      });
  });
});
function confirmDelete(id) {
            swal({
                title: 'Apakah Anda Yakin?',
                text: 'Sekali dihapus, data tersebut tidak bisa dipulihkan!',
                icon: 'warning',
                buttons: true,
                showCancelButton: true,
                dangerMode: true,
            }).then((willDelete) => {
                    if (willDelete) {
                        $('#data-'+id).submit();
                    } else {
                        swal('Operation Canceled.');
                    }
                });
        }
</script>
@include('Promkes.modalUpload')
