@extends('admin.admin')

@section('title', 'Toutes les catégories')

@section('content')

   <div class="d-flex justify-content-between align-items-center m-3">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Ajouter une catégorie</a>
   </div>

   <table class="table table-striped">
    <thead>
        <tr>
            <th>N°</th>
            <th>Catégorie</th>
            <th class="text-end">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <div class="d-flex gap-2 w-100 justify-content-end">
                        <a href="{{ route('admin.category.edit', $category) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.category.destroy', ['category' => $category]) }}" method="POST">
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