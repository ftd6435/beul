@extends('template')

@section('title', 'Blog category page || Laravel 10 By: Pathé PK')

@section('content')

<!-- News With Sidebar Start -->
<div class="container-fluid mt-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach ($tabCategories as $k => $tabCategory)
                        {{-- Show the headline of each article Start  --}}
                        @foreach ($tabCategory as $i => $post) 
                            @if ($i == 0)
                                <div class="col-12">
                                    <div class="section-title">
                                        <h4 class="m-0 text-uppercase font-weight-bold">Category: {{ $post->category->name }}</h4>
                                        <a class="text-secondary font-weight-medium text-decoration-none" href="{{ route('blog.categorySingle', ['id' => $post->category, 'category' => Str::lower($post->category->name)]) }}">View All</a>
                                    </div>
                                </div>
                            @endif   
                            @break
                        @endforeach
                        {{-- Show the headline of each article End --}}

                        @if ($k % 2 !== 0)
                            {{-- Show uneven article of each category Start  --}}
                            @foreach ($tabCategory as $j => $post)
                                {{-- two big cards --}}
                                @if ($j < 2)
                                <div class="col-lg-6">
                                    <div class="position-relative mb-3">
                                        <img class="img-fluid w-100" src="/storage/{{ $post->image }}" style="object-fit: cover;">
                                        <div class="bg-white border border-top-0 p-4">
                                            <div class="mb-2">
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                    href="">{{ $post->category->name }}</a>
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
                                
                                {{-- two small cards --}}
                                @if ($j >= 2 && $j < 4)
                                    <div class="col-lg-6">
                                        @include('shared.smallCard', ['post' => $post])  
                                    </div>
                                @endif
                                {{-- two small cards --}}
                                @if ($j >= 4 && $j < 6)
                                    <div class="col-lg-6">
                                        @include('shared.smallCard', ['post' => $post])  
                                    </div>
                                @endif
                            @endforeach
                            {{-- Show uneven article of each category End  --}}
                        @else
                            {{-- Show even article of each category Start  --}}
                            @foreach ($tabCategory as $j => $post)
                                {{-- The biggest card --}}
                                @if ($j == 0)
                                    <div class="col-lg-12">
                                        <div class="row news-lg mx-0 mb-3">
                                            <div class="col-md-6 h-100 px-0">
                                                <img class="img-fluid h-100" src="/storage/{{ $post->image }}" style="object-fit: cover;">
                                            </div>
                                            <div class="col-md-6 d-flex flex-column border bg-white h-100 px-0">
                                                <div class="mt-auto p-4">
                                                    <div class="mb-2">
                                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                            href="">{{ $post->category->name }}</a>
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

                                {{-- two small cards --}}
                                @if ($j >= 1 && $j < 3)
                                    <div class="col-lg-6">
                                        @include('shared.smallCard', ['post' => $post])  
                                    </div>
                                @endif
                                {{-- two small cards --}}
                                @if ($j >= 3 && $j < 5)
                                    <div class="col-lg-6">
                                        @include('shared.smallCard', ['post' => $post])  
                                    </div>
                                @endif
                            @endforeach
                            {{-- Show uneven article of each category End  --}}
                        @endif

                        <div class="col-lg-12 mb-3">
                            <a href=""><img class="img-fluid w-100" src="/img/ads-728x90.png" alt=""></a>
                        </div>       
                    @endforeach
                </div>
            </div>
            
            <div class="col-lg-4">
                <!-- Social Follow Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                            <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Fans</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                            <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Followers</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                            <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Connects</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                            <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Followers</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                            <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Subscribers</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
                            <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Followers</span>
                        </a>
                    </div>
                </div>
                <!-- Social Follow End -->

                <!-- Ads Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                    </div>
                    <div class="bg-white text-center border border-top-0 p-3">
                        <a href=""><img class="img-fluid" src="/img/news-800x500-2.jpg" alt=""></a>
                    </div>
                </div>
                <!-- Ads End -->

                <!-- Popular News Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <div class="bg-white border border-top-0 p-3">
                            @foreach ($posts as $post)
                                @include('shared.smallCard', ['post' => $post])
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Popular News End -->

                <!-- Newsletter Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                    </div>
                    <div class="bg-white text-center border border-top-0 p-3">
                        <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
                        <div class="input-group mb-2" style="width: 100%;">
                            <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                            <div class="input-group-append">
                                <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                            </div>
                        </div>
                        <small>Lorem ipsum dolor sit amet elit</small>
                    </div>
                </div>
                <!-- Newsletter End -->

                <!-- Tags Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <div class="d-flex flex-wrap m-n1">
                            @foreach ($tags as $tag)
                                <a href="{{ route('blog.singleTag', ['id' => $tag->id, 'tag' => Str::lower($tag->name)]) }}" class="btn btn-sm btn-outline-secondary m-1">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Tags End -->
            </div>
        </div>
    </div>
</div>
<!-- News With Sidebar End -->

@endsection