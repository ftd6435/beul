@extends('admin.admin')

@section('title', $category->id ? 'Editer une catégorie' : 'Créer une catégorie')

@section('content')

    <h1>{{ $category->id ? 'Editer une catégorie' : 'Créer une catégorie' }}</h1>

    <form action="{{ route($category->id ? 'admin.category.update' : 'admin.category.store', $category) }}" class="vstack gap-3" method="POST">
        
        @csrf
        @method($category->id ? 'PATCH' : 'POST')

        @include('shared.input', ['label' => 'Catégorie', 'name' => 'name', 'value' => $category->name])

        <div class="mt-3">
            <button class="btn btn-primary">
                @if ($category->id)
                    Edit
                @else
                    Create
                @endif
            </button>
        </div>

    </form>

@endsection