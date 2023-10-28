@extends('layout/layout')


@section('content')
<div class="container" style="margin-top: 120px">
    <div class="row d-flex justify-content-center">
        <div class="col-md-5 mt-3 card p-2 mt-2" style="border-radius: 19px">
            <br>
            <h1 class="h3 text-center">Registration</h1>
            <br>

            <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
            <a href="{{ route('login.google') }}">
                <div class="google-btn">
                    <div class="google-icon-wrapper">
                        <img class="google-icon"
                            src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" />
                    </div>
                    <p class="btn-text"><b>Log in with Google</b></p>

                </div>
            </a>

            <hr>

            @foreach ($errors->all() as $error)
                <div class="alert alert-danger p-2"> {{ $error }} </div>
            @endforeach
            <form action="{{ route('store_user') }}" method="POST">
                @csrf
                <input type="text" name="first_name" id="first_name" class="form-control mt-2 " placeholder="First Name"
                    style="width: 95%; margin-left: 15px">
                <input type="text" name="last_name" id="last_name" class="form-control mt-2" placeholder="Last Name"
                    style="width: 95%; margin-left: 15px">
                <input type="email" name="email" id="email" class="form-control mt-2" placeholder="Email"
                    style="width: 95%; margin-left: 15px">
                <input type="password" name="password" id="password" class="form-control mt-2"
                    placeholder="Password" style="width: 95%; margin-left: 15px">
                <input type="password" name="password_1" id="password_1" class="form-control mt-2"
                    placeholder="Confirm Password" style="width: 95%; margin-left: 15px">

                <button class="btn btn-pay mt-4 w-100">Sign Up</button>
            </form>
            <a class="my-2" href="{{ route('login') }}">Already have an account?</a>
        </div>
    </div>
</div>

@endSection
