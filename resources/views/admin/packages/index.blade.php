@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h4 class="page-title">Packages</h4>
    </div>

    <!-- Add Package Modal -->
    <div class="modal fade" id="addPackageModal" tabindex="-1" role="dialog" aria-labelledby="addPackageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPackageModalLabel">Add New Package</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.packages.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Package Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" name="price" required
                                step="0.01">
                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <textarea class="form-control" id="desc" name="desc" required></textarea>
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

    <!-- Edit Package Modal -->
    <div class="modal fade" id="editPackageModal" tabindex="-1" role="dialog" aria-labelledby="editPackageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editPackageModalLabel">Edit Package</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editPackageForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="edit_name">Package Name</label>
                            <input type="text" class="form-control" id="edit_name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_price">Price</label>
                            <input type="number" class="form-control" id="edit_price" name="price" required
                                step="0.01">
                        </div>
                        <div class="form-group">
                            <label for="edit_desc">Description</label>
                            <textarea class="form-control" id="edit_desc" name="desc" required></textarea>
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
                        <h4 class="card-title">Packages Management</h4>
                        <div class="card-tools">
                            <a href="#" class="btn btn-info btn-border btn-round btn-sm" data-toggle="modal"
                                data-target="#addPackageModal">
                                + Add Package
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
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($packages as $index => $package)
                                        <tr>
                                            <td>{{ $index + 1 }}.</td>
                                            <td>{{ $package->name }}</td>
                                            <td>{{ $package->desc }}</td>
                                            <td>
                                                <button class="btn btn-warning btn-sm"
                                                    onclick="showEditModal({{ $package }})">Edit</button>
                                                <form action="{{ route('admin.packages.destroy', $package) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showEditModal(entry) {
            $('#editPackageForm').attr('action', `/admin/packages/${entry.id}`);
            $('#edit_name').val(entry.name);
            $('#edit_price').val(entry.price);
            $('#edit_desc').val(entry.desc);
            $('#editPackageModal').modal('show');
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
