@extends('layouts.app')

@section('main')


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


@endsection

