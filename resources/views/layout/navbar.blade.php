<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><i class="fas fa-code"></i> Larablog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">
                    <i class="fas fa-home"></i> Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts">
                    <i class="fas fa-newspaper"></i> Posts
                </a>
            </li>

            @if (auth()->check())
            <li class="nav-item">
                <a class="nav-link" href="/posts/new">
                    <i class="fas fa-plus"></i> Create Post
                </a>
            </li>
            @endif
        </ul>
        
        <ul class="navbar-nav">
            @if (auth()->check())
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-user"></i> {{ auth()->user()->name }}
                </a>
            </li>
            <li class="nav-item">
                <a href="/logout" class="nav-link">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </li>
            @else
            <li class="nav-item">
                <a href="/register" class="nav-link">
                    <i class="fab fa-wpforms"></i> Register
                </a>
            </li>
            <li class="nav-item">
                <a href="/login" class="nav-link">
                    <i class="fas fa-sign-in-alt"></i> Login
                </a>
            </li>
            @endif
        </ul>
    </div>
</nav>
</div>  