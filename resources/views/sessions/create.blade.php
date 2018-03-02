@extends ('layout.master')

@section ('title', 'Login')

@section ('content')
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col col-md-8 offset-md-2">
                <h1 class="text-center">Login to your Larablog Account</h1>

                <hr>
                
                @include ('layout.errors')

                <form action="/login" method="POST">
                    @csrf
        
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" required>
                    </div>
    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
        
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection