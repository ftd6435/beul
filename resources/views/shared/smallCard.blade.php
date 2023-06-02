@php
    $post ??= null;
@endphp

<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
    <img class="img-fluid" src="/storage/{{ $post->image }}" alt="" width="110px">
    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
        <div class="mb-2">
            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="{{ route('blog.categorySingle', ['id' => $post->category, 'category' => Str::lower($post->category->name)]) }}">{{ $post->category->name }}</a>
            <a class="text-body" href="{{ route('blog.show', ['slug' => $post->slug, $post]) }}"><small>{{ $post->created_at->format('d-m-Y') }}</small></a>
        </div>
        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="{{ route('blog.show', ['slug' => $post->slug, $post]) }}">{{Str::of($post->title)->limit("35")}}</a>
    </div>
</div>