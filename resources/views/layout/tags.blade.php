<div class="jumbotron">
    <h1 class="text-center">
        Categories
    </h1>

    <hr>

    <ul class="list-group text-center">
        @foreach ($tags as $tag)
        <li class="list-group-item">
            <a href="/posts/tag/{{ $tag->name }}">{{ $tag->name }}</a>
        </li>
        @endforeach
    </ul>
</div>