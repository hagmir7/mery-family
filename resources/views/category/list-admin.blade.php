@extends('layout.dash')


@section('content')
    <style>
        a {
            text-decoration: none !important;
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
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                + Add aphoto
            </button>
        </p>
        <p><button class="btn btn-outline-danger btn-sm" id="btn-delete" onclick="deleteCategories()"><i
                    class="bi bi-trash"></i> Supprimer sélectionnée</button></p>
        <p>
        <form method="GET"> <input type="search" name="search" class="form-control form-control-sm border"
                placeholder="Search"></form>
        </p>
    </div>

    <div class="col-10 m-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                    <thead>

                        <tr>
                            <th><input type="checkbox" id="checkall"></th>
                            <th>Photos</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr id="category-{{ $category->id }}">
                                <td><input type="checkbox" class="checkthis" name="category[]" value="{{ $category->id }}">
                                </td>
                                <td>
                                    <a class="text-black underline-none" href="{{ route('category', $category->id) }}">
                                        <img class="font-size-24" alt="{{ $category->name }}"
                                            src="{{ asset($category->file) }}" width="50" height="50" />
                                        <!-- Ajout de l'image -->
                                        {{ $category->name }} <!-- Affichage du nom de la catégorie -->
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('category.update', $category->id) }}"
                                        class="btn btn-outline-secondary btn-sm edit"><i class="bx bx-pencil"></i></a>
                                    <a href="{{ route('category.delete', $category->id) }}"
                                        onclick="return confirm('Are you sur you want to delete category?')"
                                        class="btn btn-danger btn-sm font-size-16"><i class="fas fa-trash-alt"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    {{ $categories->links() }}

    </div>


    <!-- Modal -->
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
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#checkall').change(function() {
            $('input[name="category[]"]').prop('checked', $(this).prop('checked'));
        });


        const deleteCategories = (e) => {
            const categories = $('input[name="category[]"]:checked');
            const listcategories = categories.map(function() {
                return this.value;
            }).get();

            const deleteBtn = document.querySelector('#btn-delete')

            if (confirm('Voulez-vous vraiment supprimer ce produits ?')) {
                deleteBtn.innerHTML = (
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span>  Suppression...</span>'
                )
                $.ajax({
                    url: `{{ route('category.delete.multiple') }}`,
                    method: "POST",
                    data: {
                        category: listcategories
                    },
                    success: function(response) {
                        listcategories.forEach(element => {
                            document.querySelector('#category-' + element).remove()
                        });
                        deleteBtn.innerHTML = 'Supprimer sélectionnée';
                        Swal.fire({
                            title: 'Succès!',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        })
                    },
                    error: function(xhr) {
                        deleteBtn.innerHTML = 'Supprimer sélectionnée'
                        Swal.fire({
                            title: 'Error!',
                            text: xhr.responseJSON.message,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        })
                    }
                });
            }

        }
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
@endsection
