<!-- Modal -->
<div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
                      aria-controls="pills-login" aria-selected="true">Se connecter</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-register" data-mdb-toggle="pill" data-bs-toggle="modal" data-bs-target="#registerModal" href="#" role="tab"
                      aria-controls="pills-register" aria-selected="false">S'inscrire</a>
                  </li>
            </ul>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                  <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email input -->
                    @include('shared.input', ['class' => 'mb-4', 'label' => 'Email', 'name' => 'email', 'type' => 'email'])

                    <!-- Password input -->
                    @include('shared.input', ['class' => 'mb-4', 'label' => 'Mot de passe', 'name' => 'password', 'type' => 'password'])

                    <!-- 2 column grid layout -->
                    <div class="row mb-4">
                      <div class="col-md-6 d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-3 mb-md-0">
                          <input class="form-check-input" type="checkbox" name="remember" value="" id="remember_me" checked />
                          <label class="form-check-label" for="remember_me"> Rappeler de moi </label>
                        </div>
                      </div>

                      <div class="col-md-6 d-flex justify-content-center">
                        <!-- Simple link -->
                        @if (Route::has('password.request'))
                          <a data-bs-toggle="modal" data-bs-target="#forgotPasswordModal" href="#">Mot de pass oublié</a>
                        @endif
                      </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Se connecter</button>

                    <!-- Register buttons -->
                    <div class="text-center">
                      <p>Pas inscrit? <a data-bs-toggle="modal" data-bs-target="#registerModal" href="#">S'inscrire</a></p>
                    </div>
                  </form>
                </div>
            </div>
            <!-- Pills content -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
</div>
