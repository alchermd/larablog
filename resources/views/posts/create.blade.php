@extends ('layout.master')

@section ('title', 'Create a new Post')

@section ('content')
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col col-md-8 offset-md-2">
                <h1 class="text-center">Submit a new Post</h1>

                <hr>

                @include ('layout.errors')

                <form action="/posts" method="POST">
                    @csrf
        
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                    </div>
    
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" id="body" rows="7" class="form-control">{{ old('body') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="tags">Tag</label>
                        <select name="tags" id="tags" class="custom-select">
                            @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>
        
                    <div class="form-group">
                        <input type="submit" value="Publish" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection