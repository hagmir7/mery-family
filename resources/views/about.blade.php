@extends('layout.layout')
<style>
    p {
        color: black;
        letter-spacing: 1px;
        font-weight: 500;
    }
</style>
@section('content')
    <div style="margin-top: 120px" id="my-lightgallery">
        <!-- Hero Start -->
        <div class="container-fluid py-6 my-6 mt-0" style="">
            <div class="container text-center animated bounceInDown">
                <h1 class="display-1 mb-4">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">About</li>
                </ol>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Satrt -->
        @foreach ($abouts as $about)
            <div class="container-fluid py-6">
                <div class="container m-3">
                    <div class="row g-5 align-items-center">
                        @if (!$about->is_owner)
                            <div class="col-lg-4 wow bounceInUp {{ $loop->index % 2 == 0 ? '' : 'order-2' }}"
                                data-wow-delay="0.1s"
                                style="visibility: visible; animation-delay: 0.1s; animation-name: bounceInUp;">
                                <a data-lg-size="480-480-480, 800-800-800, 1400-1400" data-pinterest-text="Pin it3"
                                    data-tweet-text="lightGallery" class="gallery-item" data-src="{{ $about->image }}">
                                    <img class="img-fluid rounded" data-wow-duration="0.5s" data-wow-delay="0.2s"
                                        src="{{ $about->image }}" alt="" style="max-height: 500px">
                                </a>
                            @else
                                <div class="col-lg-4 wow bounceInUp {{ $loop->index % 2 == 0 ? '' : 'order-2' }}"
                                    data-wow-delay="0.1s"
                                    style="visibility: visible; animation-delay: 0.1s; animation-name: bounceInUp;">
                                    <a data-lg-size="480-480-480, 800-800-800, 1400-1400" data-pinterest-text="Pin it3"
                                        data-tweet-text="lightGallery" class="gallery-item" data-src="{{ $about->image }}">
                                        <img class="img-fluid rounded" data-wow-duration="0.5s" data-wow-delay="0.2s"
                                            src="{{ $about->image }}" alt="">
                                    </a>
                                    <div class="col-lg-10">
                                        <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                            <h4 class="text-primary">{{ $about->name }}</h4>
                                            <p class="text-white mb-0">Project Owner</p>
                                        </div>
                                    </div>
                        @endif
                    </div>
                    <div class="col-lg-8 wow bounceInUp" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
                        @if (auth()->user()?->role)
                            <small
                                class="d-inline-block fw-bold text-dark text-uppercase bg-light border rounded-pill px-4 py-1 mb-3"
                                type="button" data-bs-toggle="modal" data-bs-target="#editModal-{{ $about->id }}">
                                <i class="bx bx-pencil m-1" style="color: black"></i>
                                Update
                                </a>
                            </small>
                        @endif

                        <p class="mb-4">{!! $about->description !!}
                        </p>
                    </div>
                </div>
            </div>
    </div>
    @endforeach

    <!-- About End -->
    <br> <br>

    {{-- Modal Update  --}}
    @foreach ($abouts as $about)
    <div class="modal fade" id="editModal-{{ $about->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Photo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                {{-- Form fields here --}}
                <div class="mb-3">
                  <label for="description-{{ $about->id }}" class="form-label">Description</label>
                  <textarea class="form-control" id="description-{{ $about->id }}" name="description">{!! $about->description !!}</textarea>
                </div>
                <div class="mb-3">
                  <label for="image-{{ $about->id }}" class="form-label">Photo</label>
                  <input type="file" class="form-control" id="image-{{ $about->id }}" name="image" accept="image/*" onchange="previewImage({{ $about->id }})">
                  @error('image')
                    <span class="text-danger">{{ $message }}</span> <br>
                  @enderror
                </div>
              </div>
               <img id="imagePreview-{{ $about->id }}" src="{{ asset($about->image) }}" alt="Preview" style="max-width: 100%; margin: 10px;">
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Photo</button>
              </div>
            </div>
          </form>
        </div>
      </div>

@endforeach

            </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top" style="display: none;"><i
            class="fa fa-arrow-up"></i>
    </a>
@endsection

@section('script')
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

<script>
function previewImage(aboutId) {
  var fileInput = document.getElementById('image-' + aboutId);
  var imagePreview = document.getElementById('imagePreview-' + aboutId);
  var galleryItem = document.querySelector('.gallery-item[about-id="' + aboutId + '"]');

  if (fileInput.files && fileInput.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      imagePreview.src = e.target.result;
      galleryItem.dataset.src = e.target.result;

      // Update the database with the new image
      var form = document.getElementById('about-update-form-' + aboutId);
      var image = form.querySelector('input[name="image"]');
      image.value = e.target.result;
    };

    reader.readAsDataURL(fileInput.files[0]);
  } else {
    imagePreview.style.display = 'none';
  }
}

</script>
@endsection

