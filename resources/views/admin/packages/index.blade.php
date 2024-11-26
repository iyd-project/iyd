@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h4 class="page-title">Packages</h4>
    </div>

    <div class="row row-card-no-pd">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <h4 class="card-title">Packages Management</h4>
                        <div class="card-tools">
                            <a href="{{ route('admin.packages.create') }}" class="btn btn-info btn-border btn-round btn-sm">
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
                                                <a href="{{ route('admin.packages.edit', $package) }}"
                                                    class="btn btn-warning btn-sm">Edit</a>
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
@endsection
