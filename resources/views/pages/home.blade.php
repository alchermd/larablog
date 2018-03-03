@extends ('layout.master')

@section ('title', 'Home')

@section ('content')
<div class="container">
    <div class="jumbotron">
        <h1>Welcome to Larablog!</h1>
        <p class="lead">We are a community of developers that discuss about PHP, Laravel, and Web Development.</p>
        <p>Ready to get started?</p>

        @if (auth()->check())
        <a href="/posts" class="btn btn-primary"><i class="fas fa-newspaper"></i> Latest Posts</a>
        <a href="/dashboard" class="btn btn-info"><i class="fas fa-user"></i> My Dashboard</a>
        @else
        <a href="/register" class="btn btn-primary"><i class="fab fa-wpforms"></i> Create a free account</a>
        <a href="/login" class="btn btn-info"><i class="fas fa-sign-in-alt"></i> Login to an existing account</a>
        @endif
    </div>
</div>
@endsection