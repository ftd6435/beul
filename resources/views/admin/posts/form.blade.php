@extends('admin.admin')

@section('title', $post->id ? 'Editer un article' : 'Créer un article')

@section('content')

    <h1>{{ $post->id ? 'Editer un article' : 'Créer un article' }}</h1>

    <form action="{{ route($post->id ? 'admin.post.update' : 'admin.post.store', $post) }}" class="vstack gap-3" method="POST" enctype="multipart/form-data">
        
        @csrf
        @method($post->id ? 'PATCH' : 'POST')

        <div class="row">

            @include('shared.input', ['type' => 'hidden', 'name' => 'user_id', 'value' => Auth::user()->id])
            @include('shared.input', ['type' => 'file', 'label' => 'Image', 'name' => 'image'])
            @include('shared.input', ['label' => 'Titre', 'name' => 'title', 'value' => $post->title])
            @include('shared.input', ['type' => 'textarea', 'label' => 'Content', 'name' => 'content', 'value' => $post->content])
            
        </div>

        <div class="row">
            @include('shared.select', ['class' => 'col-lg-4', 'type' => 'category', 'label' => 'Categories', 'name' => 'category_id'])
            @include('shared.select', ['class' => 'col-lg-4', 'label' => 'Tags', 'name' => 'tags', 'mulptiple' => true, 'value' => $post->tags()->pluck('id')])
            @auth
                @include('shared.select', ['class' => 'col-lg-4', 'type' => 'status', 'label' => 'Status', 'name' => 'status', 'value' => $post->status])
            @endauth
        </div>

        <div class="mt-3">
            <button class="btn btn-primary">
                @if ($post->id)
                    Edit
                @else
                    Create
                @endif
            </button>
        </div>

    </form>

@endsection