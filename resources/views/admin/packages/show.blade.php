<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Package</title>
</head>

<body>
    <h1>{{ $package->name }}</h1>
    <p>Price: ${{ number_format($package->price, 2) }}</p>
    <p>Description: {{ $package->desc }}</p>
    <a href="{{ route('admin.packages.index') }}">Back to Packages</a>
</body>

</html>
