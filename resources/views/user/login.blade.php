@extends('../layout/layout')

@section('content')

<div class="container" style="margin-top: 120px">
    <div class=" d-flex justify-content-center">
        <div class="col-md-5 card my-4 py-4 px-2" style="border-radius: 15px">
            <h1 class="h3 text-center">Log In</h1>
            <br>
            <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
            <a href="{{ route('login.google') }}">
                <div class="google-btn">
                    <div class="google-icon-wrapper">
                        <img class="google-icon"
                            src="https://fonts.gstatic.com/s/i/productlogos/googleg/v6/24px.svg"/>
                    </div>
                    <p class="btn-text"><b>Log in with Google</b></p>

                </div>
            </a>

            <hr>
            <form action="{{ route('login.store') }}" method="POST" >
                @csrf
                @error('email')
                    <div class="p-1 alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="email" style="margin-left: 15px">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control mt-2" placeholder="Email" style="width: 95%; margin-left: 15px">
                <label for="password" style="margin-left: 15px">Password</label>
                <input type="password" name="password" id="password" class="form-control mt-2" placeholder="Enter your password" style="width: 95%; margin-left: 15px">
                <button class="btn btn-primary mt-4 w-100">Log In</button>
                <a href="{{ route('register') }}" class="btn btn-outline-primary mt-4 w-100">Create a new account</a>
            </form>
        </div>
    </div>
</div>

@endsection
