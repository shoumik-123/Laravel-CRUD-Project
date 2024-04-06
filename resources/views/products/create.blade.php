<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/png" href="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark text-light">
        <ul class="navbar-nav">
            <li class="nav-item px-4 py-2"><a class="nav-link text-light" href="/">Products</a> </li>
        </ul>
    </nav>

{{--    success alert--}}
    @if($message = Session::get('success'))
        <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <script>
            setTimeout(function() {
                $('#success-alert').alert('close');
            }, 5000);
        </script>
    @endif


    <div class="container mx-auto">
        <h1 class="text-center my-5">Create New Products</h1>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form method="POST" action="{{route('productStore') , }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label"><b>Name</b></label>
                        <input name="name" type="text" class="form-control" id="name" value="{{old('name')}}" placeholder="Product Name">

                        @if($errors->has('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif

                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label"><b>Description</b></label>
                        <textarea name="description" class="form-control" id="details" rows="3" placeholder="Description of products ... "> {{old('description')}}</textarea>

                        @if($errors->has('description'))
                            <span class="text-danger">{{$errors->first('description')}}</span>
                        @endif

                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label"><b>Image</b></label>
                        <input name="img" class="form-control" type="file" id="img" {{old('img')}}>

                        @if($errors->has('img'))
                            <span class="text-danger">{{$errors->first('img')}}</span>
                        @endif

                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark float-end py-2 px-4">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
</html>
