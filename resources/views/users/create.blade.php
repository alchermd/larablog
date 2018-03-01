@extends ('layout.master')

@section ('title', 'Register')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col col-md-8">
            <div class="jumbotron">
                <h1 class="text-center">Register for a Larablog Account</h1>

                <hr>

                <form action="/register" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Register" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

        <div class="col col-md-4">
            <div class="jumbotron">
                <h1 class="text-center">
                    Account Features
                </h1>

                <hr>

                <ul>
                    <li>Publish new articles.</li>
                    <li>Comment to other articles.</li>
                    <li>Email updates.</li>
                    <li>... and so much more!</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection