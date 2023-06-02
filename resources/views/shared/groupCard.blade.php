@php
    $posts ??= null;
@endphp

@foreach ($posts as $key => $post )
    @if ($key < 2)
        <div class="col-lg-6">
            <div class="position-relative mb-3">
                <img class="img-fluid w-100" src="/storage/{{ $post->image }}" style="object-fit: cover;">
                <div class="bg-white border border-top-0 p-4">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                            href="{{ route('blog.categorySingle', ['id' => $post->category, 'category' => Str::lower($post->category->name)]) }}">{{ $post->category->name }}</a>
                        <a class="text-body" href="{{ route('blog.show', ['slug' => $post->slug, $post]) }}"><small>{{ $post->created_at->format('d-m-Y') }}</small></a>
                    </div>
                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="{{ route('blog.show', ['slug' => $post->slug, $post]) }}">{{ Str::of($post->title)->limit('30') }}</a>
                    <p class="m-0">{{ Str::of($post->content)->limit('54') }}</p>
                </div>
                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle mr-2" src="/img/user.jpg" width="25" height="25" alt="">
                        <small>{{ $post->user->name }}</small>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
    
{{-- <div class="col-lg-12 mb-3">
    <a href=""><img class="img-fluid w-100" src="img/ads-728x90.png" alt=""></a>
</div> --}}

@foreach ($posts as $key => $post )
    @if ($key >= 2 && $key < 4)
        <div class="col-lg-6">
            <div class="position-relative mb-3">
                <img class="img-fluid w-100" src="/storage/{{ $post->image }}" style="object-fit: cover;">
                <div class="bg-white border border-top-0 p-4">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                            href="{{ route('blog.categorySingle', ['id' => $post->category, 'category' => Str::lower($post->category->name)]) }}">{{ $post->category->name }}</a>
                        <a class="text-body" href="{{ route('blog.show', ['slug' => $post->slug, $post]) }}"><small>{{ $post->created_at->format('d-m-Y') }}</small></a>
                    </div>
                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="{{ route('blog.show', ['slug' => $post->slug, $post]) }}">{{ Str::of($post->title)->limit('30') }}</a>
                </div>
                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle mr-2" src="/img/user.jpg" width="25" height="25" alt="">
                        <small>{{ $post->user->name }}</small>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach

<div class="col-lg-6">
    @foreach ($posts as $key => $post)
        @if ($key >= 4 && $key < 6)
            @include('shared.smallCard', ['post' => $post])
        @endif
    @endforeach
</div>
<div class="col-lg-6">
    @foreach ($posts as $key => $post)
        @if ($key >= 6 && $key < 8)
            @include('shared.smallCard', ['post' => $post])
        @endif
    @endforeach
</div>
{{-- <div class="col-lg-12 mb-3">
    <a href=""><img class="img-fluid w-100" src="img/ads-728x90.png" alt=""></a>
</div> --}}

@foreach ($posts as $key => $post)
    @if ($key == 9)
        <div class="col-lg-12">
            <div class="row news-lg mx-0 mb-3">
                <div class="col-md-6 h-100 px-0">
                    <img class="img-fluid h-100" src="/storage/{{ $post->image }}" style="object-fit: cover;">
                </div>
                <div class="col-md-6 d-flex flex-column border bg-white h-100 px-0">
                    <div class="mt-auto p-4">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="{{ route('blog.categorySingle', ['id' => $post->category, 'category' => Str::lower($post->category->name)]) }}">{{ $post->category->name }}</a>
                            <a class="text-body" href="{{ route('blog.show', ['slug' => $post->slug, $post]) }}"><small>{{ $post->created_at->format('d-m-Y') }}</small></a>
                        </div>
                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="{{ route('blog.show', ['slug' => $post->slug, $post]) }}">{{ Str::of($post->title)->limit('45') }}</a>
                        <p class="m-0">{{ Str::of($post->content)->limit('70') }}</p>
                    </div>
                    <div class="d-flex justify-content-between bg-white border-top mt-auto p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle mr-2" src="/img/user.jpg" width="25" height="25" alt="">
                            <small>{{ $post->user->name }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
<div class="col-lg-6">
    @foreach ($posts as $key => $post)
        @if ($key >= 9 && $key < 11)
            @include('shared.smallCard', ['post' => $post])
        @endif
    @endforeach
</div>
<div class="col-lg-6">
    @foreach ($posts as $key => $post)
        @if ($key >= 11 && $key < 13)
            @include('shared.smallCard', ['post' => $post])
        @endif
    @endforeach
</div>