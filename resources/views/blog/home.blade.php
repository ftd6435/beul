@extends('template')

@section('title', 'Blog home page || Laravel 10 By: Pathé PK')

@section('content')
        <!-- Main News Slider Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 px-0">
                    <div class="owl-carousel main-carousel position-relative">
                        @foreach ($posts as $key => $post)
                            @if ($key < 3)
                                <div class="position-relative overflow-hidden" style="height: 500px;">
                                    <img class="img-fluid h-100" src="{{$post->getPostImage()}}" style="object-fit: cover;">
                                    <div class="overlay">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href="{{ route('blog.categorySingle', ['id' => $post->category, 'category' => Str::lower($post->category->name)]) }}">{{$post->category->name}}</a>
                                            <a class="text-white" href="{{ route('blog.show', ['slug' => $post->slug, $post]) }}">{{$post->created_at->format('d-m-Y')}}</a>
                                        </div>
                                        <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="{{ route('blog.show', ['slug' => $post->slug, $post]) }}">{{Str::of($post->content)->limit(54)}}</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-5 px-0">
                    <div class="row mx-0">
                        @foreach ($posts as $key => $post)
                            @if ($key > 2 && $key <= 6)
                                <div class="col-md-6 px-0">
                                    <div class="position-relative overflow-hidden" style="height: 250px;">
                                        <img class="img-fluid w-100 h-100" src="/storage/{{$post->image}}" style="object-fit: cover;">
                                        <div class="overlay">
                                            <div class="mb-2">
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                    href="{{ route('blog.categorySingle', ['id' => $post->category, 'category' => Str::lower($post->category->name)]) }}">{{$post->category->name}}</a>
                                                <a class="text-white" href="{{ route('blog.show', ['slug' => $post->slug, $post]) }}"><small>{{$post->created_at->format('d-m-Y')}}</small></a>
                                            </div>
                                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="{{ route('blog.show', ['slug' => $post->slug, $post]) }}">{{Str::of($post->content)->limit(40)}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Main News Slider End -->
    
    
        <!-- Breaking News Start -->
        <div class="container-fluid bg-dark py-3 mb-3">
            <div class="container">
                <div class="row align-items-center bg-dark">
                    <div class="col-12">
                        <div class="d-flex justify-content-between">
                            <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Breaking News</div>
                            <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                                style="width: calc(100% - 170px); padding-right: 90px;">
                                @foreach ($posts as $key => $post)  
                                    @if ($key < 3)    
                                        <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="{{ route('blog.show', ['slug' => $post->slug, $post]) }}">{{Str::of($post->content)->limit(80)}}</a></div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breaking News End -->
    
    
        <!-- Featured News Slider Start -->
        <div class="container-fluid pt-5 mb-3">
            <div class="container">
                <div class="section-title">
                    <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
                </div>
                <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                    @foreach ($posts as $post)
                        <div class="position-relative overflow-hidden" style="height: 300px;">
                            <img class="img-fluid h-100" src="{{$post->getPostImage()}}" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="{{ route('blog.categorySingle', ['id' => $post->category, 'category' => Str::lower($post->category->name)]) }}">{{$post->category->name}}</a>
                                    <a class="text-white" href=""><small>{{$post->created_at->format('d-m-Y')}}</small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">{{Str::of($post->content)->limit(40)}}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Featured News Slider End -->
    
        <!-- News With Sidebar Start -->
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title">
                                    <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                                    <a class="text-secondary font-weight-medium text-decoration-none" href="{{ route('blog.category') }}">View All</a>
                                </div>
                            </div>

                            @include('shared.groupCard', ['posts' => $posts])

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
                                <a href=""><img class="img-fluid" src="img/news-800x500-2.jpg" alt=""></a>
                            </div>
                        </div>
                        <!-- Ads End -->
    
                        <!-- Popular News Start -->
                        <div class="mb-3">
                            <div class="section-title mb-0">
                                <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
                            </div>
                            <div class="bg-white border border-top-0 p-3">
                                @foreach ($posts as $key => $post)
                                    @if ($key < 5)
                                        @include('shared.smallCard', ['post' => $post])
                                    @endif
                                @endforeach
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
                                        <a href="{{ route('blog.singleTag', ['id' => $tag->id, 'tag' => Str::lower($tag->name)]) }}" class="btn btn-sm btn-outline-secondary m-1">{{$tag->name}}</a>
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