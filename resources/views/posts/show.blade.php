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
                    <form action="/posts/{{ $post->id }}/comments" method="POST">
                        @csrf

                        <div class="form-group">
                            <h3><label for="body">Comments</label></h3>
                            <textarea name="body" id="body" rows="5" class="form-control" value="{{ old('body') }}" placeholder="What do you think?"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Add Comment" class="btn btn-primary">
                        </div>
                    </form>

                    <hr>

                    <ul class="list-group">
                    @foreach ($post->comments as $comment)
                        <li class="list-group-item">
                            <small>{{ $comment->user->username}}, {{ $comment->created_at->diffForHumans() }}</small> <br>
                            {{ $comment->body }}
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection