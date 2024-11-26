<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Package</title>
</head>

<body>
    <h1>Edit Package</h1>
    <form action="{{ route('admin.packages.update', $package) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Package Name</label>
        <input type="text" name="name" id="name" value="{{ $package->name }}" required>
        <label for="price">Price</label>
        <input type="number" name="price" id="price" value="{{ $package->price }}" required step="0.01">
        <label for="desc">Description</label>
        <textarea name="desc" id="desc" required>{{ $package->desc }}</textarea>
        <button type="submit">Update</button>
    </form>
</body>

</html>
