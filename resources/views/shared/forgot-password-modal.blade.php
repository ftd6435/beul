<!-- Modal -->
<div class="modal fade" id="forgotPasswordModal" aria-labelledby="forgotPasswordModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <p>
                Mod passe oublié? pas d'inquietude. Juste entrer votre adresse email et vous recevrer un lien de modification
            </p>
        </div>
        <div class="modal-body">
            <!-- Pills content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="tab-login">
                  <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email input -->
                    @include('shared.input', ['class' => 'mb-4', 'label' => 'Email', 'name' => 'email', 'type' => 'email'])

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Email du lien de modification</button>

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
