<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Update Book</h1>
        <form action="{{ route('book.update', $book->id) }}" method="POST">
            @csrf
            @method('put')
            <input type="hidden" name="id" value="{{ $book->id }}">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $book->title }}">
            </div>
            {{--  --}}
            <div class="mb-3">
                <label for="thumbnail" class="form-label">URL Thumbnail</label>
                <input type="text" class="form-control" name="thumbnail" value="{{ $book->thumbnail }}"
                    id="thumbnail">
            </div>
            {{--  --}}
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" value="{{ $book->author }}" name="author" id="author">
            </div>
            {{--  --}}
            <div class="mb-3">
                <label for="publisher" class="form-label">Publisher</label>
                <input type="text" class="form-control" value="{{ $book->publisher }}" name="publisher"
                    id="publisher">
            </div>
            {{--  --}}
            <div class="mb-3">
                <label for="publication" class="form-label">Publication</label>
                <input type="date" class="form-control" value="{{ $book->publication }}" name="publication"
                    id="publication">
            </div>
            {{--  --}}
            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="number" class="form-control" value="{{ $book->price }}" name="price" id="price">
            </div>
            {{--  --}}
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" value="{{ $book->quantity }}" name="quantity" id="quantity">
            </div>
            {{--  --}}
            <div class="mb-3">
                <label for="quantity" class="form-label">Category name</label>
                <select class="form-select" name="category_id" id="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            {{--  --}}
            <div class="mb-3">
                <button type="submit" class="btn btn-info">Submit</button>
                <a class='btn btn-success' href="{{ route('book.index') }}">Back</a>
                </select>
            </div>
            {{--  --}}


        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
