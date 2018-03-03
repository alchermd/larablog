<div class="jumbotron">
    <h1 class="text-center">
        Categories
    </h1>

    <hr>

    @if ($tags->isEmpty())
    <p>No categories yet.</p>
    @else
    <ul class="list-group text-center">    
        @foreach ($tags as $tag)
        <li class="list-group-item">
            <a href="/posts/tag/{{ $tag->name }}">{{ $tag->name }}</a>
        </li>
        @endforeach
    </ul>
    @endif
</div>