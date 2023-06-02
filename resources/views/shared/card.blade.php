<div class="row">
    @foreach ($posts as $post )
        <div class="col-3">
            <div class="card">
                <img src="" alt="" class="card-img-top">
                <div class="card-body">
                    <p class="small">Category: <span class="btn btn-secondary">{{ $post->category->name }}</span></p>
                    <h3 class="card-title">{{ $post->title }}</h3>
                    <div class="card-text">{{ $post->content }}</div>

                    <p class="small">Tags: 
                        @foreach ($post->tags as $tag )
                            <span class="btn btn-info">{{ $tag->name }}</span>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</div>