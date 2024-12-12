@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h4 class="page-title">About Us</h4>
    </div>

    <!-- Add About Us Modal -->
    <div class="modal fade" id="addAboutUsModal" tabindex="-1" role="dialog" aria-labelledby="addAboutUsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAboutUsModalLabel">Add About Us Entry</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.aboutus.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image_path">Image (optional)</label>
                            <input type="file" class="form-control-file" id="image_path" name="image_path">
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

    <!-- Edit About Us Modal -->
    <div class="modal fade" id="editAboutUsModal" tabindex="-1" role="dialog" aria-labelledby="editAboutUsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editAboutUsModalLabel">Edit About Us Entry</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editAboutUsForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="edit_description">Description</label>
                            <textarea name="description" id="edit_description" class="form-control" rows="4" required></textarea>
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
                        <h4 class="card-title">About Us Management</h4>
                        <div class="card-tools">
                            <button class="btn btn-info btn-border btn-round btn-sm" data-toggle="modal"
                                data-target="#addAboutUsModal">
                                + Add About Us
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="tables">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($aboutUs as $index => $entry)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $entry->description }}</td>
                                        <td>
                                            @if ($entry->image_path && file_exists(public_path('storage/' . $entry->image_path)))
                                                <img src="{{ asset('storage/' . $entry->image_path) }}" alt="About Us Image"
                                                    width="100">
                                            @else
                                                <span>No Image</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-warning btn-sm"
                                                onclick="showEditModal({{ $entry }})">Edit</button>
                                            <form action="{{ route('admin.aboutus.destroy', $entry) }}" method="POST"
                                                style="display:inline;" onsubmit="return confirmDelete(event);">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No entries found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showEditModal(entry) {
            // Set form action with the specific entry ID
            $('#editAboutUsForm').attr('action', `/admin/aboutus/${entry.id}`);
            // Populate form fields with existing data
            $('#edit_description').val(entry.description);
            $('#editAboutUsModal').modal('show');
        }

        function confirmDelete(event) {
            event.preventDefault();
            if (confirm('Are you sure you want to delete this entry?')) {
                event.target.submit();
            }
            return false;
        }
    </script>
@endsection
