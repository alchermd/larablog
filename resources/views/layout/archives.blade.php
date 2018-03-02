<div class="jumbotron">
    <h1 class="text-center">
        Archives
    </h1>

    <hr>

    <ul class="list-group text-center">
        @foreach ($archives as $stats)
        <li class="list-group-item">
            <a href="/posts/?month={{ Carbon\Carbon::parse($stats['month'])->month }}&year={{ $stats['year'] }}">
                {{ $stats['month'] . " " . $stats['year'] }}
            </a>
            <span class="badge badge-pill badge-primary">
                {{ $stats['published'] }} post{{ $stats['published'] > 1 ? 's' : '' }}
            </span>
        </li>
        @endforeach
    </ul>
</div>