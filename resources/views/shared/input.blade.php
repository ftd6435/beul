@php
    $type ??= 'text';
    $label ??= null;
    $name ??= '';
    $value ??= '';
    $placeholder ??= '';
    $class ??= null
@endphp

@if ($type == 'textarea')
    <div @class(['form-group', $class])>
        <label for="{{ $name }}" class="form-label">{{ $label }}</label>
        <textarea name="{{ $name }}" id="{{ $name }}" rows="15" class="form-control @error($name) is-invalid @enderror">{{ old($name, $value) }}</textarea>

        @error($name)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
@else
    <div @class(['form-group', $class])>
        <label for="{{ $name }}" class="form-label">{{ $label }}</label>
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder }}" class="form-control fs-5 @error($name) is-invalid @enderror" value="{{ old($name, $value) }}">

        @error($name)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
@endif



