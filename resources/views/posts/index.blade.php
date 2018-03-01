@extends ('layout.master')

@section ('title', 'Posts')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col col-md-8">
            <div class="jumbotron">
                <h1 class="text-center">Latest Posts</h1>

                <hr>

                @foreach ($posts as $post)
                    <h2>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        <small class="text-muted">
                            by {{ $post->user->username }}, {{ $post->created_at->toFormattedDateString() }}
                        </small>
                    </h2>
                @endforeach
            </div>
        </div>

        <div class="col col-md-4">
            <div class="jumbotron">
                <h1 class="text-center">
                    Archives
                </h1>

                <hr>

                <ul class="list-group text-center">
                    <li class="list-group-item">
                        <a href="#">March 2018</a>
                        <span class="badge badge-pill badge-primary">3 posts</span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">April 2018</a>
                        <span class="badge badge-pill badge-primary">5 posts</span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">May 2018</a>
                        <span class="badge badge-pill badge-primary">1 post</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection