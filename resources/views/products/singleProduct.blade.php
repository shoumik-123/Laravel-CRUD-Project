@extends('layouts.app')
@section('main')


<div class="container">
    <div class="row p-5 m-5">

        <h1 class="text-center mb-5">Product Details</h1>

        <div class="col-md-7">
            <h4 class="text-muted">Name :  <span class="text-warning-emphasis">{{ $product -> name }}</span></h4>
            <h4 class="text-muted mt-5">Description : </h4>
            <h6>
                {{ $product  -> description }}
            </h6>
        </div>
        <div class="col-md-5">
            <img src="/products/{{ $product->image }}" alt="Image  of Product!" width="100%"  class="rounded-4"/>
        </div>
    </div>
</div>


@endsection
