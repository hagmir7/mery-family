@extends('layout.layout')


@section('content')

<div class="container"  style="margin-top: 120px">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 mt-3 card p-2 mt-2">
            <h1 class="h6 text-center">Your Profile</h1>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger p-2"> {{ $error }} </div>
            @endforeach
            <div class="d-flex justify-content-center">
                <img src="{{ $user->avatar }}" width="60px" height="60px" class="rounded-pill cover border" alt="{{ $user->first_name }}">
            </div>
            <form action="{{ route('user.update.store', $user->id ) }}" method="POST" enctype="multipart/form-data" >
                @method("PUT")
                @csrf
                <label for="" class="mt-3">Profile Picture</label>
                <input type="file" accept="image/*" name="avatar" class="form-control">
                <input type="text" name="first_name" value="{{ $user->first_name }}" id="first_name" class="form-control mt-2" placeholder="First Name">
                <input type="text" name="last_name" value="{{ $user->last_name }}" id="last_name" class="form-control mt-2" placeholder="Last Name">
                <input type="email" name="email" value="{{ $user->email }}" id="email" class="form-control mt-2" placeholder="Email">
                <input type="tel" name="phone" value="{{ $user->phone }}" id="phone" class="form-control mt-2" placeholder="Phone">
                <input type="text" name="address" value="{{ $user->address }}" id="address" class="form-control mt-2" placeholder="Address">
                <textarea name="bio" id="" cols="30" rows="5" class="form-control mt-2" placeholder="Your Bio">{{ $user->bio }}</textarea>
                <button class="btn btn-primary mt-4 w-100">Update</button>
            </form>
        </div>
    </div>
</div>


@endSection
