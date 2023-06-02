@extends('admin.admin')

@section('title', 'Tous les articles')

@section('content')

   <div class="d-flex justify-content-between align-items-center m-3">
        <h1>Tous nos articles</h1>
        <a href="{{ route('admin.post.create') }}" class="btn btn-primary">Ajouter un article</a>
   </div>

   <table class="table table-striped">
    <thead>
        <tr>
            <th>N°</th>
            <th>Title</th>
            <th>Content</th>
            <th class="text-end">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $key => $post)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ Str::of($post->content)->limit(70) }}</td>
                <td>
                    <div class="d-flex gap-2 w-100 justify-content-end">
                        <a href="{{ route('admin.post.edit', $post) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.post.destroy', ['post' => $post]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach 
    </tbody>
   </table>

   <div class="mt-4">
        {{ $posts->links() }}
   </div>
@endsection