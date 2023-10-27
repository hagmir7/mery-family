@extends('layout.layout')


@section('content')







<div class="container-xxl py-5" style="margin-top: 120px">
    <div class="container">
        <div class="row g-5 align-items-center d-flex justify-content-center">
            <div class="col-lg-6" data-wow-delay="0.1s">
                <h1 class="h3">Contactez-nous</h1>
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <label for="full_name">Prénom</label>
                    <input type="text" name="full_name" class="form-control mb-2">
                    @error('full_name') <span class="text-danger">{{$message}}</span> <br>@enderror

                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control mb-2">
                    @error('email') <span class="text-danger">{{$message}}</span> <br>@enderror

                    <label for="name">Message</label>
                    <textarea name="message" id="" cols="30" rows="4" class="form-control mb-3"></textarea>
                    @error('message') <span class="text-danger">{{ $message }}</span> <br>@enderror
                    <button class="btn btn-primary w-100">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</div>
 
@endsection
