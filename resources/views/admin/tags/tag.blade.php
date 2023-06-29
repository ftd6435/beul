@extends('admin.admin')

@section('title', 'Tous les tags')

@section('content')

   <div class="d-flex justify-content-between align-items-center m-3">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.tag.create') }}" class="btn btn-primary">Ajouter un tag</a>
        {{-- <a href="{{ route('admin.tag.corbeille') }}" class="btn btn-primary">Corbeille</a> --}}
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
                        @if (Auth::user()->id == $tag->role || Auth::user()->role == 'admin')
                            @if ($tag->trashed())
                                @can('restore', $tag)
                                    <form action="{{ route('admin.tag.restore', ['id' => $tag->id]) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-success" onclick="return confirm('Voulez-vous restoré ce tag?')">Restore</button>
                                    </form>
                                @endcan
                                @can('forceDelete', $tag)
                                    <form action="{{ route('admin.tag.forceDelete', ['id' => $tag->id]) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer definitivement ce tag?')">Delete Forever</button>
                                    </form>
                                @endcan
                            @else
                                @can('update', $tag)
                                    <a href="{{ route('admin.tag.edit', $tag) }}" class="btn btn-primary">Edit</a>
                                @endcan
                                @can('delete', $tag)
                                    <form action="{{ route('admin.tag.destroy', ['tag' => $tag]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer ce tag?')">Delete</button>
                                    </form>
                                @endcan
                            @endif 
                        @endif
                    </div>
                </td>
            </tr>
        @endforeach 
    </tbody>
   </table>
@endsection