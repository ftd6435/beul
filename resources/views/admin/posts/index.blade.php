@extends('admin.admin')

@section('title', 'Tous les articles')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="d-flex justify-content-between align-items-center m-3">
            <h1>Tous nos articles</h1>
            <a href="{{ route('admin.post.create') }}" class="btn btn-primary d-none d-lg-block">Ajouter un article</a>
       </div>
    </div>

    <div class="col-lg-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Title</th>
                    <th class="d-none d-lg-block">Status</th>
                    <th class="text-end">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $key => $post)
                    @if ($post->status == 'Poster')
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $post->title }}</td>
                            <td class="d-none d-lg-block">{{ $post->status }}</td>
                            <td>
                                <div class="d-flex gap-2 w-100 justify-content-end">
                                    @if ($post->trashed() && Auth::user()->role == 'admin')
                                        @can('restore', $post)
                                            <form action="{{ route('admin.post.restore', ['id' => $post->id]) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-primary" onclick="return confirm('Etes vous sûr de vouloir restorer ce post ?')">Restore</button>
                                            </form>
                                        @endcan
                                        @can('forceDelete', $post)
                                            <form action="{{ route('admin.post.forceDelete', ['id' => $post->id]) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Etes vous sûr de vouloir supprimer definitivement ce post ?')">Delete Forever</button>
                                            </form>
                                        @endcan
                                    @endif
            
                                    @if (!$post->trashed())
                                        @if ($post->user_id === Auth::user()->id || Auth::user()->role == 'admin')
                                            @can('update', $post)
                                                <a href="{{ route('admin.post.edit', $post) }}" class="btn btn-primary">Edit</a>
                                            @endcan
                                            @can('delete', $post)
                                                <form action="{{ route('admin.post.destroy', ['post' => $post]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Etes vous sûr de vouloir mettre ce post dans la corbeille?')">Delete</button>
                                                </form>
                                            @endcan
                                        @endif
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @else
                        <tr class="{{($post->status == 'En attente') ? 'table-warning' : 'table-danger'}}">
                            <td>{{ $key+1 }}</td>
                            <td>{{ $post->title }}</td>
                            <td class="d-none d-lg-block">{{ $post->status }}</td>
                            <td>
                                <div class="d-flex gap-2 w-100 justify-content-end">
                                    @if ($post->trashed() && Auth::user()->role == 'Admin')
                                        @can('restore', $post)
                                            <form action="{{ route('admin.post.restore', ['id' => $post->id]) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-primary" onclick="return confirm('Etes vous sûr de vouloir restorer ce post ?')">Restore</button>
                                            </form>
                                        @endcan
                                        @can('forceDelete', $post)
                                            <form action="{{ route('admin.post.forceDelete', ['id' => $post->id]) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Etes vous sûr de vouloir supprimer definitivement ce post ?')">Delete Forever</button>
                                            </form>
                                        @endcan
                                    @endif
        
                                    @if (!$post->trashed())
                                        @if ($post->user_id === Auth::user()->id || Auth::user()->role == 'Admin')
                                            @can('update', $post)
                                                <a href="{{ route('admin.post.edit', $post) }}" class="btn btn-primary">Edit</a>
                                            @endcan
                                            @can('delete', $post)
                                                <form action="{{ route('admin.post.destroy', ['post' => $post]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Etes vous sûr de vouloir mettre ce post dans la corbeille?')">Delete</button>
                                                </form>
                                            @endcan
                                        @endif
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endif
                @endforeach 
            </tbody>
           </table>
        
           <div class="mt-4">
                {{ $posts->links() }}
           </div>
    </div>
</div>

@endsection