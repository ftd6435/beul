<!-- Modal -->
<div class="modal fade" id="destroyUserModal" aria-labelledby="destroyUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <!-- Pills navs -->
            <h4>Etes vous sûr de vouloir supprimer votre compte?</h4>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                  <form method="POST" action="{{ route('profile.destroy', ['user' => Auth::user()]) }}">
                    @csrf
                    @method('DELETE')

                    <!-- Password input -->
                    @include('shared.input', ['class' => 'mb-4', 'label' => 'Mot de passe', 'name' => 'password', 'type' => 'password'])

                      <div class="col-md-6 d-flex justify-content-center">
                        <!-- Simple link -->
                        @if (Route::has('password.request'))
                          <a data-bs-toggle="modal" data-bs-target="#forgotPasswordModal" href="#">Mot de pass oublié</a>
                        @endif
                      </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-danger btn-block mb-4" onclick="return confirm('Etes vous sûr de vouloir supprimer votre compte?')">Delete</button>
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