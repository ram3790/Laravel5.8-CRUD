@extends('layouts.layout-1')
@section('title', 'Details of ' . $product->name)

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Details of {{$product->name}}</h1>
        <div><p><a href="/products/{{ $product->id }}/edit">Edit</a></p></div>
        <form action="/products/{{ $product->id }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <p><strong>Name</strong> {{ $product->name }}</p>
        <p><strong>Description</strong> {{ $product->description }}</p>
        <p><strong>Status</strong> {{ $product->status }}</p>
        <p><strong>Price</strong> {{ $product->price }}</p>
    </div>
</div>

@endsection