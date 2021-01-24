<x-app-layout>
    <x-slot name="header">
        {{ __('Tambah Pengguna') }}
    </x-slot>
    <x-slot name="button">
        
    </x-slot>
    <x-card>
        <div class="card">
            <div class="card-header">
              <h4>Tambah Pengguna</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-4">
                  <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
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
                      Sed sed metus vel lacus hendrerit tempus. Sed efficitur velit tortor, ac efficitur est lobortis quis. Nullam lacinia metus erat, sed fermentum justo rutrum ultrices. Proin quis iaculis tellus. Etiam ac vehicula eros, pharetra consectetur dui. Aliquam convallis neque eget tellus efficitur, eget maximus massa imperdiet. Morbi a mattis velit. Donec hendrerit venenatis justo, eget scelerisque tellus pharetra a.
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
@include('Promkes.modalUpload')
