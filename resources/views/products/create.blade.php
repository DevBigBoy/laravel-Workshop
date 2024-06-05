<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Product Form</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <header>
        <h1>Submit Product</h1>
    </header>
    <main>
        <form id="productForm" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="productName">Product Name:</label>
                <input type="text" id="productName" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image Upload:</label>
                <input type="file" name="images[]" multiple>
            </div>
            <div class="button-group">
                <button type="submit">Submit</button>
                <button type="reset">Cancel</button>
            </div>
        </form>
    </main>
</body>

</html>
