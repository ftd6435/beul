
@php
    $type ??= null;

    $tabStatus = ['En attente', 'Poster', 'Rejeter'];
    $tagsId = $post->tags()->pluck('id');
@endphp

@if ($type == 'category')

    <div @class(['form-group', $class])>
        <label for="{{ $name }}" class="form-label">{{ $label }}</label>
        <select name="{{ $name }}" id="{{ $name }}" class="form-select @error($name) is-invalid @enderror">
            <option value="">Selectionnez la catégorie</option>
            @foreach ( $categories as $category )
                <option @selected(old('category_id', $post->category_id) == $category->id) value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        @error($name)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

@elseif ($type == 'status')
    <div @class(['form-group', $class])>
        <label for="{{ $name }}" class="form-label">{{ $label }}</label>
        <select name="{{ $name }}" id="{{ $name }}" class="form-select @error($name) is-invalid @enderror">
            <option value="">Attribuer un status</option>
            @foreach ( $tabStatus as $status )
                <option @selected(old('status', $post->status) == $status) value="{{ $status }}">{{ $status }}</option>
            @endforeach
        </select>

        @error($name)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
@else

    <div @class(['form-group', $class])>
        <label for="{{ $name }}" class="form-label">{{ $label }}</label>
        <select name="{{ $name }}[]" id="{{ $name }}" class="form-select @error($name) is-invalid @enderror" multiple>
            @foreach ( $tags as $tag )
                <option @selected($tagsId->contains($tag->id)) value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>

        @error($name)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    
@endif