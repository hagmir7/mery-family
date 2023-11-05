@extends('layout.layout')

@section('content')
    <style>
        .gallery-image {
            border: 3px solid #f6f1f1;
            margin: 12px;
            transition: transform 0.3s ease-in-out;
        }

        .gallery-image:hover {
            transform: scale(1.1);
        }

        .cover {
            object-fit: cover !important;
        }


        .form-outline {
            position: relative;
        }

        .form-label {
            position: absolute;
            top: 10px;
            left: 10px;
            pointer-events: none;
            transition: 0.2s;
            font-size: 12px;
        }

        .form-control:focus+.form-label {
            top: -10px;
            left: 10px;
            font-size: 12px;
            background-color: #f0f2f5e4;
            padding: 0 4px;
            color: rgb(22, 213, 255);
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
                                <img class="gallery-image img-responsive cover wow" data-wow-duration="0.5s"
                                    data-wow-delay="0.2s" src="{{ asset($photo->file) }}" alt="{{ $photo->name }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row container m-4">
        <div class="col-md-8 col-lg-6">
            <div class="card border-0" style="background-color: #f0f2f5;">
                <div class="card-body p-4">
                    <div class="form-outline mb-4">
                        <form method="post" action="{{ route('comments.store') }}" id="commentForm">
                            @csrf
                            <input type="hidden" name="media_id" value="{{ $photo->id }}">
                            <textarea type="submit" id="addANote" name="comment" class="form-control" placeholder=" " required></textarea>
                            <label for="addANote" class="form-label" onclick="moveLabel()"> + Add a comment</label>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            @foreach ($photo->comments as $comment)
            <div class="card mb-2">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset($comment->user->avatar) }}" alt="avatar" width="25"
                                height="25" />
                            <p class="small mb-0 ms-2" style="font-size: 10px">{{ $comment->user->first_name }}
                                {{ $comment->user->last_name }}</p>
                        </div>
                        @if(auth()->user()?->role === 1)
                            <div class="d-flex align-items-center">
                                <i class="bi bi-trash3" style="color: red"></i>
                            </div>
                        @endif
                    </div>
                    <h5 style="font-size: 15px" class="m-3">{{ $comment->comment }}</h5>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    </div>
    <script>
        function moveLabel() {
            document.getElementById('addANote').focus();
        }

        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('addANote').addEventListener('keydown', function(e) {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    document.getElementById('commentForm').submit();
                }
            });
        });
    </script>
@endsection
