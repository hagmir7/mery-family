@extends('layout.dash')


@section('content')
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center d-flex justify-content-center">
                <div class="col-lg-8 mt-2">
                    <h1 class="h3">Add a new photo</h1>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger p-2 mb-1">{{ $error }}</div>
                        @endforeach
                    @endif
                    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control mb-2" placeholder="Add your description.">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span> <br>
                        @enderror
                        <label for="file">Pictures</label>
                        <input type="file" accept="file/*" class="form-control mb-2" name="file" id="imageInput"
                            onchange="previewImage()">
                        @error('file')
                            <span class="text-danger">{{ $message }}</span> <br>
                        @enderror

                        <!-- Aperçu de l'image -->
                        <img id="imagePreview" src="#" alt="Preview" style="display: none; max-width: 100%;">
                        <br> <br>
                        <button class="btn btn-primary w-100">Save</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <script>
        function previewImage() {
            var fileInput = document.getElementById('imageInput');
            var imagePreview = document.getElementById('imagePreview');

            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block'; // Affiche l'aperçu
                }

                reader.readAsDataURL(fileInput.files[0]);
            } else {
                imagePreview.style.display = 'none'; // Cache l'aperçu si aucun fichier n'est sélectionné
            }
        }
    </script>

@endsection
