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
        <h1 class="text-center">List Book</h1>
        <a style="margin-bottom: 30px" class="btn btn-success" href="{{ route('book.create') }}">Add New Book</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Thumbnail</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Publication</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>
                            <img src="{{ $item->thumbnail }} " width="50px" alt="">

                        </td>
                        <td>{{ $item->author }}</td>
                        <td>{{ $item->publisher }}</td>
                        <td>{{ $item->publication }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <form action="{{ route('book.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure')" type="submit"
                                    class="btn btn-danger">Delete</button>
                            </form>
                            <a style="margin-top: 10px" class="btn btn-warning"
                                href="{{ route('book.edit', $item->id) }}">Edit</a>
                            <a style="margin-top: 10px" class="btn btn-info"
                                href="{{ route('book.show', $item->id) }}">Show</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>


        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
