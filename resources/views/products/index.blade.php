@extends('layouts.app')

@section('main')




    <div class="container mx-auto my-5">
        <div class="float-end">
            <button class="btn btn-dark py-2 px-4 mt-3"><a href="{{ route('productCreate')  }}" class="nav-link">New Product</a> </button>
        </div>
        <h1 class="my-5">Products</h1>

        <table class="table table-striped table-hover">
            <thead>
                <tr >
                    <th scope="col">No</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th colspan="2" scope="col">Action</th>
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
                        <a href="{{ route('productEdit', $product->id) }}" class="btn btn-outline-dark btn-sm" >Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('productRemove', $product->id ) }}">
                            @csrf
                            <button  class="btn bg-warning-subtle btn-sm" type="submit">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>



@endsection
