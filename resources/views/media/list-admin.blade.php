@extends('layout.dash')


@section('content')
    <style>
        a {
            text-decoration: none !important;
        }

        .photo-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .photo-item {
            flex: 0 0 calc(33.33% - 10px);
            /* Pour 3 photos par ligne avec un espace de 10px entre elles */
            position: relative;
            margin: 0 5px;
            margin-bottom: 10px;
        }

        .photo {
            width: 100%;
            height: 300px;
            transition: transform 0.3s;
        }

        .photo-buttons {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s;
            background-color: rgba(0, 0, 0, 0.7);
            text-align: center;
            padding: 10px;
            border-radius: 5px;
        }

        .photo-item:hover .photo-buttons {
            opacity: 1;
        }

        .edit-button,
        .delete-button {
            color: white;
            text-decoration: none;
            display: block;
            margin-top: 10px;
        }

        .checkthis {
            position: absolute;
            top: 10px;
            left: 10px;
        }
    </style>

    @php
        function badge($message, $type): string
        {
            return '<span class="badge bg-' . $type . '">' . $message . '</span>';
        }
    @endphp
    <h4 class="m-5">PHOTOS ({{ $categories->count() }})</h4>
    <div class="d-flex justify-content-between m-5">

        <p>
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                + Add a photo
            </button>
        </p>

        <p>
            <button class="btn btn-danger btn-sm" id="btn-delete" onclick="deleteCategories()">
                <i class="bi bi-trash"></i>
                Delete selected
            </button>
        </p>

        <p>
        <form method="GET"> <input type="search" name="search" class="form-control form-control-sm border"
                placeholder="Search"></form>
        </p>

    </div>

    <div class="col-10 m-5">
            <div class="photo-gallery">
                @foreach ($categories as $category)
                    <div class="photo-item">
                        <img class="photo" alt="{{ $category->name }}" src="{{ asset($category->file) }}" />
                        <div class="photo-buttons">
                            <a type="button" class="edit-button" data-bs-toggle="modal" data-bs-target="#editModal-{{ $category->id }}">
                                <i class="bx bx-pencil m-1" ></i>
                                Update
                            </a>
                            <form action="{{ route('gallery.delete', $category->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this photo?')" style="background: none; color: white; border: none; padding: 0; font: inherit; cursor: pointer; outline: inherit;">
                                    <i class="fas fa-trash-alt m-1"></i> Delete
                                </button>
                            </form>
                        </div>
                        <input type="checkbox" class="checkthis" name="category[]" value="{{ $category->id }}" />
                    </div>
                @endforeach
            </div>
    </div>
    <div class="clearfix"></div>
    {{ $categories->links() }}



    <!-- Modal Create -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add a new photo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-5 align-items-center d-flex justify-content-center">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- end modal create --}}


    {{-- Modal Update  --}}
@foreach ($categories as $category)

    <div class="modal fade" id="editModal-{{ $category->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <form action="{{ route('gallery.update', $category->id) }}" method="POST" enctype="multipart/form-data">
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
                  <label for="description-{{ $category->id }}" class="form-label">Description</label>
                  <textarea class="form-control" id="description-{{ $category->id }}" name="description">{{ $category->description }}</textarea>
                </div>
                <div class="mb-3">
                  <label for="file-{{ $category->id }}" class="form-label">Photo</label>
                  <input type="file" class="form-control" id="file-{{ $category->id }}" name="file" accept="image/*" onchange="previewImage({{ $category->id }})">
                @error('file')
                  <span class="text-danger">{{ $message }}</span> <br>
                @enderror
                </div>
              </div>
               <!-- Aperçu de l'image -->
               <img id="imagePreview-{{ $category->id }}" src="{{ asset($category->file) }}" alt="Preview" style="max-width: 100%; margin: 10px;">
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Photo</button>
              </div>
            </div>
          </form>
        </div>
      </div>
          
@endforeach
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#checkall').change(function() {
            $('input[name="category[]"]').prop('checked', $(this).prop('checked'));
        });

        const deleteCategories = () => {
            const categories = $('input[name="category[]"]:checked');
            const listCategories = categories.map(function() {
                return this.value;
            }).get();

            const deleteBtn = $('#btn-delete'); // Utiliser jQuery pour la cohérence

            if (confirm('Voulez-vous vraiment supprimer ces produits ?')) {
                deleteBtn.html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span>  Suppression...</span>'
                );
                $.ajax({
                    url: `{{ route('gallery.delete.multiple') }}`, // Assurez-vous que cette route est correcte et fonctionnelle
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}", // Ajoutez le token CSRF si nécessaire
                        category: listCategories
                    },
                    success: function(response) {
                        listCategories.forEach(element => {
                            let categoryElement = $('#category-' + element);
                            if (categoryElement.length) {
                                categoryElement.remove();
                            }
                        });
                        deleteBtn.html('Delete selected');
                        Swal.fire({
                            title: 'Succès!',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                        });
                    },
                    error: function(xhr) {
                        deleteBtn.html('Delete selected');
                        Swal.fire({
                            title: 'Erreur!',
                            text: xhr.responseJSON.message,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            }
        }

        // Ajoutez un écouteur d'événements pour votre bouton supprimer
        $('#btn-delete').on('click', deleteCategories);
    });
</script>

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

<script>
    function previewImage(categoryId) {
        var fileInput = document.getElementById('file-' + categoryId);
        var imagePreview = document.getElementById('imagePreview-' + categoryId);

        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block'; // Show the preview
            }

            reader.readAsDataURL(fileInput.files[0]);
        } else {
            imagePreview.style.display = 'none'; // Hide the preview if no file is selected
        }
    }
</script>

@endsection
