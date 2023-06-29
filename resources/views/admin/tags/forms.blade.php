@extends('admin.admin')

@section('title', $tag->id ? 'Editer un tag' : 'Créer un tag')

@section('content')

    <h1>{{ $tag->id ? 'Editer un tag' : 'Créer un tag' }}</h1>

    <form action="{{ route($tag->id ? 'admin.tag.update' : 'admin.tag.store', $tag) }}" class="vstack gap-3" method="POST">
        
        @csrf
        @method($tag->id ? 'PATCH' : 'POST')

        <input type="hidden" name="role" value="{{ Auth::user()->id }}">
        @include('shared.input', ['label' => 'Tag name', 'name' => 'name', 'value' => $tag->name])

        <div class="mt-3">
            <button class="btn btn-primary">
                @if ($tag->id)
                    Edit
                @else
                    Create
                @endif
            </button>
        </div>

    </form>

@endsection