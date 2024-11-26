<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Package</title>
</head>

<body>
    <h1>Create New Package</h1>
    <form action="{{ route('admin.packages.store') }}" method="POST">
        @csrf
        <label for="name">Package Name</label>
        <input type="text" name="name" id="name" required>
        <label for="price">Price</label>
        <input type="number" name="price" id="price" required step="0.01">
        <label for="desc">Description</label>
        <textarea name="desc" id="desc" required></textarea>
        <button type="submit">Create</button>
    </form>
</body>

</html>
