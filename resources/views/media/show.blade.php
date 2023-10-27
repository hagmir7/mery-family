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
            <div id="my-lightgallery">
                <div class="container-sm">
                    <div class="col-sm-3 mb-3">
                        <div class="wow fadeInUp py-2">
                            <a data-lg-size="480-480-480, 800-800-800, 1400-1400" data-pinterest-text="Pin it3"
                                data-tweet-text="lightGallery" class="gallery-item" data-src="{{ asset($photo->file) }}">
                                <img class="gallery-image img-responsive wow" data-wow-duration="0.5s" data-wow-delay="0.2s"
                                    src="{{ asset($photo->file) }}" alt="{{ $photo->name }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h4>Comments</h4>
                <br>

                @foreach ($photo->comments as $comment)
                    <div class="card mb-3">
                        <div class="comment card-body">
                            <strong>{{ $comment->user->first_name }}:</strong>
                            {{ $comment->comment }}
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-6">
                <!-- Comment Form -->
                <form method="post" action="{{ route('comments.store') }}">
                    @csrf
                    <input type="hidden" name="media_id" value="{{ $photo->id }}">
                    <div class="form-group">
                        <label for="comment">
                            <h5 class="mt-1">Add a Comment:</h5>
                        </label>
                        <br> <br>
                        <textarea class="form-control" name="comment" id="comment" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </form>
            </div>
        </div>
    </div>



@endsection
