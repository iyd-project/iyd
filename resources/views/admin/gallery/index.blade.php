@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h4 class="page-title">Galleries</h4>
    </div>

    <!-- Add Gallery Modal -->
    <div class="modal fade" id="addGalleryModal" tabindex="-1" role="dialog" aria-labelledby="addGalleryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addGalleryModalLabel">Add New Gallery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="package_id">Package</label>
                            <select name="package_id" id="package_id" class="form-control" required>
                                <option value="" disabled selected>Select Package</option>
                                @foreach ($packages as $package)
                                    <option value="{{ $package->id }}">{{ $package->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image_path">Image</label>
                            <input type="file" class="form-control-file" id="image_path" name="image_path" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Gallery Modal -->
    <div class="modal fade" id="editGalleryModal" tabindex="-1" role="dialog" aria-labelledby="editGalleryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editGalleryModalLabel">Edit Gallery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editGalleryForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="edit_package_id">Package</label>
                            <select name="package_id" id="edit_package_id" class="form-control" required>
                                <option value="" disabled>Select Package</option>
                                @foreach ($packages as $package)
                                    <option value="{{ $package->id }}">{{ $package->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_image_path">Image (optional)</label>
                            <input type="file" class="form-control-file" id="edit_image_path" name="image_path">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row row-card-no-pd">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <h4 class="card-title">Galleries Management</h4>
                        <div class="card-tools">
                            <a href="#" class="btn btn-info btn-border btn-round btn-sm" data-toggle="modal"
                                data-target="#addGalleryModal">
                                + Add Gallery
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table" id="tables">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Package Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($galleries as $index => $gallery)
                                        <tr>
                                            <td>{{ $index + 1 }}.</td>
                                            <td>{{ $gallery->package->name ?? 'No Package' }}</td>
                                            <td>
                                                <img src="{{ $gallery->image_path && file_exists(public_path('storage/' . $gallery->image_path))
                                                    ? asset('storage/' . $gallery->image_path)
                                                    : asset('images/default-image.jpg') }}"
                                                    alt="Gallery Image" width="100">
                                            </td>
                                            <td>
                                                <button class="btn btn-warning btn-sm"
                                                    onclick="showEditModal({{ $gallery }})">Edit</button>
                                                <form action="{{ route('admin.gallery.destroy', $gallery) }}"
                                                    method="POST" style="display:inline;"
                                                    onsubmit="return confirmDelete(event);">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">No galleries found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showEditModal(gallery) {
            // Isi data ke dalam form
            $('#editGalleryForm').attr('action', `/admin/gallery/${gallery.id}`);
            $('#edit_package_id').val(gallery.package_id);

            // Kosongkan input gambar karena opsional
            $('#edit_image_path').val('');

            // Tampilkan modal
            $('#editGalleryModal').modal('show');
        }
    </script>

    <script>
        function confirmDelete(event) {
            event.preventDefault();
            if (confirm('Are you sure you want to delete this gallery?')) {
                event.target.submit();
            }
            return false;
        }
    </script>
@endsection
