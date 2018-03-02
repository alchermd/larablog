@extends ('layout.master')

@section ('title', $post->title)

@section ('content')
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col col-md-8 offset-md-2">
                <h1 class="text-center">{{ $post->title }}</h1>
                <p class="text-center">
                    <small>by {{ $post->user->username }}, {{ $post->created_at->toFormattedDateString() }}</small>
                </p>

                <hr>
        
                <p class="lead text-center">
                    {{ $post->body }}
                </p>

                <hr>

                <div class="jumbotron">
                    <h3><label for="body">Comments</label></h3>

                    @if (auth()->check())
                    <form action="/posts/{{ $post->id }}/comments" method="POST">
                        @csrf

                        <div class="form-group">
                            <textarea name="body" id="body" rows="5" class="form-control" value="{{ old('body') }}" placeholder="What do you think?" required></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Add Comment" class="btn btn-primary">
                        </div>
                    </form>
                    @else
                    <p>Please <a href="/login">login</a> to add your comment.</p>
                    @endif

                    <hr>

                    @if ($post->comments->isEmpty())
                    <p>No comments yet.</p>
                    @else
                    <ul class="list-group">
                    @foreach ($post->comments as $comment)
                        <li class="list-group-item">
                            <small>{{ $comment->user->username}}, {{ $comment->created_at->diffForHumans() }}</small> <br>
                            {{ $comment->body }}
                        </li>
                    @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection