<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Packages List</title>
</head>

<body>
    <h1>Packages</h1>
    <a href="{{ route('admin.packages.create') }}">Create New Package</a>
    <ul>
        @foreach ($packages as $package)
            <li>
                <a href="{{ route('admin.packages.show', $package) }}">{{ $package->name }}</a> -
                ${{ number_format($package->price, 2) }}
                <a href="{{ route('admin.packages.edit', $package) }}">Edit</a>
                <form action="{{ route('admin.packages.destroy', $package) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>

</html>
