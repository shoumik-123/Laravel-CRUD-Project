<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/png" href="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark text-light">
        <ul class="navbar-nav">
            <li class="nav-item px-4 py-2"><a class="nav-link text-light" href="/">Products</a> </li>
        </ul>
    </nav>
    <div class="container mx-auto d-">
        <div class="float-end">
            <button class="btn btn-dark py-2 px-4 mt-3"><a href="{{ route('productCreate')  }}" class="nav-link">New Product</a> </button>
        </div>
        <h1>Products</h1>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>
                        <img src="products/{{$product->image}}" class="rounded-circle" height="50" width="50" alt="">
                    </td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <a class="btn btn-outline-dark btn-sm" >Edit</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
