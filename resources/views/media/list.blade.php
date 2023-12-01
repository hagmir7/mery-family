{{-- page media.list --}}

@extends('layout.layout')
@section('content')
    <style>
        .gallery-image {
            border: 3px solid #f6f1f1;
            transition: transform 0.3s ease-in-out;
            width: 100%;
        }

        .cover {
            object-fit: cover !important;
        }
    </style>

    <div class="container" style="margin-top: 120px">
        <!-- Ajoutez ceci à votre formulaire de recherche -->
        <form method="GET" action="{{ route('gallery.index') }}">
            <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="Rechercher par dernier nom">
            </div>
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </form>

        <div class="row image-grid">

            @forelse ($photos as $photo)
                <div class="col-3 mb-3 px-0 grid-item" style="margin-top: -18px;">
                    <div class="wow fadeInUp" data-wow-delay="0.{{ $loop->index + 1 }}s">
                        <a href="{{ route('gallery.show', $photo) }}">
                            @if (App\ImageHelper::isLargeImage($photo->file))
                                <!-- Appel à la fonction isLargeImage -->
                                <img class="gallery-image img-responsive wow cover large" data-wow-duration="0.5s"
                                    data-wow-delay="0.2s" alt="{{ $photo->name }}" src="{{ $photo->file }}"
                                    style="width: 100%;" />
                            @else
                                <img class="gallery-image img-responsive wow cover" data-wow-duration="0.5s"
                                    data-wow-delay="0.2s" alt="{{ $photo->name }}" src="{{ $photo->file }}"
                                    style="width: 100%;" />
                            @endif
                        </a>
                    </div>
                </div>
            @empty
                <p>Aucune photo trouvée.</p>
            @endforelse

        </div>
    </div>
    <div class="container">
        {{ $photos->links() }}
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const grid = document.querySelector('.image-grid');
            new Masonry(grid, {
                itemSelector: '.grid-item',
                columnWidth: '.grid-item',
                percentPosition: true
            });
        });
    </script>
@endsection
