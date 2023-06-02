@extends('admin.admin')

@section('title', 'Tous les tags')

@section('content')

   <div class="d-flex justify-content-between align-items-center m-3">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.tag.create') }}" class="btn btn-primary">Ajouter un tag</a>
   </div>

   <table class="table table-striped">
    <thead>
        <tr>
            <th>N°</th>
            <th>Tag</th>
            <th class="text-end">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tags as $tag)
            <tr>
                <td>{{ $tag->id }}</td>
                <td>{{ $tag->name }}</td>
                <td>
                    <div class="d-flex gap-2 w-100 justify-content-end">
                        <a href="{{ route('admin.tag.edit', $tag) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.tag.destroy', ['tag' => $tag]) }}" method="POST">
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
@endsection