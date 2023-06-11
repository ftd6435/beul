<!-- Modal -->
<div class="modal fade" id="registerModal" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-login" data-mdb-toggle="pill" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#" role="tab"
                      aria-controls="pills-login" aria-selected="false">Se connecter</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab-register" data-mdb-toggle="pill" href="#pills-login" role="tab"
                      aria-controls="pills-register" aria-selected="true">S'inscrire</a>
                  </li>
            </ul>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                  <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    @include('shared.input', ['class' => 'mb-4', 'label' => 'Nom', 'name' => 'name'])

                    <!-- Email input -->
                    @include('shared.input', ['class' => 'mb-4', 'label' => 'Email', 'name' => 'email', 'type' => 'email'])

                    <!-- Password input -->
                    @include('shared.input', ['class' => 'mb-4', 'label' => 'Mot de passe', 'name' => 'password', 'type' => 'password'])

                    <!-- Confirm Password -->
                    @include('shared.input', ['class' => 'mb-4', 'label' => 'Confirmer Mot de passe', 'name' => 'password_confirmation', 'type' => 'password'])

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">S'inscrire</button>

                    <!-- Register buttons -->
                    <div class="text-center">
                      <p>Vous avez déjà un compte? <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Se connecter</a></p>
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



{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
