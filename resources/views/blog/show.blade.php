@extends('template')

@section('title', 'Blog single page || Laravel 10 By: Pathé PK')

@section('content')

        <!-- Breaking News Start -->
        <div class="container-fluid mt-5 mb-3 pt-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="d-flex justify-content-between">
                            <div class="section-title border-right-0 mb-0" style="width: 180px;">
                                <h4 class="m-0 text-uppercase font-weight-bold">Tranding</h4>
                            </div>
                            <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0"
                                style="width: calc(100% - 180px); padding-right: 100px;">
                                <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="#">{{ $post->title }}</a></div>
                                <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="#">{{ $post->title }}</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breaking News End -->
    
    
        <!-- News With Sidebar Start -->
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- News Detail Start -->
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="/storage/{{ $post->image }}" style="object-fit: cover;">
                            <div class="bg-white border border-top-0 p-4">
                                <div class="mb-3">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="#">{{ $post->category->name }}</a>
                                    <a class="text-body" href="#">{{ $post->created_at->format('d-m-Y') }}</a>
                                </div>
                                <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">{{ $post->title }}</h1>
                                <p>{{ $post->content }}</p>

                                <h3 class="text-uppercase font-weight-bold mb-3">{{ $post->title }}</h3>
                                <img class="img-fluid w-50 float-left mr-4 mb-2" src="/storage/{{ $post->image }}">
                                <p>{{ $post->content }}</p>
                                <h5 class="text-uppercase font-weight-bold mb-3">{{ $post->title }}</h5>
                                <img class="img-fluid w-50 float-right mr-4 mb-2" src="/storage/{{ $post->image }}">
                                <p>{{ $post->content }}</p>
                            </div>
                            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle mr-2" src="{{$post->user->getUserImage()}}" width="25" height="25" alt="">
                                    <span>{{ $post->user->name }}</span>
                                </div>
                            </div>
                        </div>
                        <!-- News Detail End -->
                        
                        <!-- Comment List Start -->
                        <div class="mb-3">
                            <div class="section-title mb-0">
                                <h4 class="m-0 text-uppercase font-weight-bold">{{ count($post->comments) }} Comments</h4>
                            </div>
                            <div class="bg-white border border-top-0 p-4">
                                @foreach ($post->comments as $comment)
                                    <div class="media mb-4">
                                        <img src="{{ $comment->client->getClientImage() }}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6><a class="text-secondary font-weight-bold" href="">{{ $comment->client->fullname }}</a> <small><i>{{ $comment->created_at->format('d-m-Y') }}</i></small></h6>
                                            <p>{{ $comment->content }}</p>
                                            {{-- <button class="btn btn-sm btn-outline-secondary">Reply</button> --}}
                                        </div>
                                    </div>
                                @endforeach
                                
                                {{-- <div class="media">
                                    <img src="/img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                    <div class="media-body">
                                        <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                        <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                            accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                        <div class="media mt-4">
                                            <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1"
                                                style="width: 45px;">
                                            <div class="media-body">
                                                <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor
                                                    labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed
                                                    eirmod ipsum.</p>
                                                <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <!-- Comment List End -->
    
                        <!-- Comment Form Start -->
                        <div class="mb-3">
                            <div class="section-title mb-0">
                                <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>
                            </div>
                            <div class="bg-white border border-top-0 p-4">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="post_id" id="post_id" value="{{$post->id}}">
                                    </div>

                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="fullname">Name *</label>
                                                <input type="text" class="form-control" name="fullname" id="name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email">Email *</label>
                                                <input type="email" class="form-control" name="email" id="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="website">Website</label>
                                        <input type="url" class="form-control" name="website" id="website">
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Image *</label>
                                        <input type="file" class="form-control" name="image" id="image">
                                    </div>
    
                                    <div class="form-group">
                                        <label for="content">Message *</label>
                                        <textarea id="content" name="content" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Leave a comment"
                                            class="btn btn-primary font-weight-semi-bold py-2 px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Comment Form End -->
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
                                @foreach ($posts as $p)
                                    @include('shared.smallCard', ['post' => $p])
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