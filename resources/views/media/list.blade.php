@extends('layout.layout')


@section('content')

<style>
    .gallery-image {
        width: 274px;
        height: 370px;
        border: 3px solid #f6f1f1;
        margin: 12px;
        transition: transform 0.3s ease-in-out;
    }

    .gallery-image:hover {
        transform: scale(1.1);
    }
</style>


<div class="container" style="margin-top: 120px">

    <div class="row py-2">
        {{-- @dd(array_slice($category->products->toArray(), 0, 4)) --}}
        @foreach ($photos as $photo)
        <div class="col-sm-3 mb-3">
            <div class="wow fadeInUp py-2" data-wow-delay="0.{{$loop->index + 1}}s">
                <a href="{{ route('gallery.show', $photo) }}">
                    <img class="gallery-image img-responsive wow" data-wow-duration="0.5s" data-wow-delay="0.2s" alt="{{ $photo->name }}"
                         src="{{ $photo->file }}" />
                </a>
            </div>
        </div>
    @endforeach
    
        {{$photos->links()}}
    </div>
</div>



@endsection
