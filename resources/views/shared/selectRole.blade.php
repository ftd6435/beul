@php
    $type ??= null;

    $tabRole = ['Admin', 'Editor', 'User'];
@endphp

<div @class(['form-group', $class])>
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $name }}" class="form-select @error($name) is-invalid @enderror">
        <option value="">Attribuer un role</option>
        @foreach ( $tabRole as $role )
            <option @selected(old('status', $user->role) == $role) value="{{ $role }}">{{ $role }}</option>
        @endforeach
    </select>

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>