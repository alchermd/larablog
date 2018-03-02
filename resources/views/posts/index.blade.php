@extends ('layout.master')

@section ('title', 'Posts')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col col-md-8">
            <div class="jumbotron">
                <h1 class="text-center">Latest Posts</h1>

                <hr>
                
                @if ($posts->isEmpty())
                <p>No posts yet.</p>
                @else
                @foreach ($posts as $post)
                    <h2>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <small class="text-muted">
                        by {{ $post->user->username }}, {{ $post->created_at->toFormattedDateString() }}
                        
                        @foreach ($post->tags as $tag)
                        <a href="/posts/tag/{{ $tag->name}}">
                            <span class="badge badge-pill badge-primary">
                                {{ $tag->name }}
                            </span>
                        </a>
                        @endforeach
                    </small>
                @endforeach
                @endif
            </div>
        </div>

        <div class="col col-md-4">
            @include ('layout.archives')
        </div>
    </div>
</div>
@endsection