@extends ('layout.master')

@section ('title', $user->username)

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
            <div class="jumbotron">
                <h2 class="text-center">Stats</h2>

                <hr>

                <ul>
                    <li>Date Registered: <mark>{{ $user->created_at->toFormattedDateString() }}</mark></li>
                    <li>Total number of posts: <mark>{{ $user->posts->count() }}</mark></li>
                    <li>Total number of comments: <mark>{{ $user->comments->count() }}</mark></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection