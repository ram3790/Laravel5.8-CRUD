@extends('layouts.layout-1')
@section('title', 'Add Product')

@section('content')
<div class="row">
    <div class="col-12">
    <h1>Add New Product</h1>
    </div>
</div>
<div class="row">
    <div class="col-12">
    <form action="/products" method="post" class="pb-5">

        @include('products.form')

        <button class="btn btn-primary" type="submit">Add product</button>
    </form>
    </div>
</div>


@endsection