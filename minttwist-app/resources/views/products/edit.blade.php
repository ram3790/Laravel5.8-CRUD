@extends('layouts.layout-1')
@section('title', 'Edit ' . $product->name)

@section('content')
<div class="row">
    <div class="col-12">
    <h1>Edit {{ $product->name }}</h1>
    </div>
</div>
<div class="row">
    <div class="col-12">
    <form action="/products/{{$product->id}}" method="POST" class="pb-5">
        @method('PATCH')
        @include('products.form')
        <button class="btn btn-success" type="submit">Save</button>
    </form>
    </div>
</div>


@endsection