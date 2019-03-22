@extends('layouts.layout-1')
@section('title', 'Products')

@section('content')

<div class="row">
    <div class="col-12">
    <h1>Products</h1>
    <p><a href="products/create">Add new products</a></p>
    </div>
</div>

<div class="row">
    <div class="col-12">
        @if(count($products) > 1)
            @foreach($products as $p)

            <div class="row">
                <div class="col-2">{{ $p->id }}</div>
                <div class="col-4">
                <a href="/products/{{ $p->id }}">{{ $p->name }}</a>
                </div>
                <div class="col-2">{{ $p->description }}</div>
                <div class="col-2">£{{ $p->price }}</div>
            </div>
            @endforeach
        @else
        <div class="row">
            <h3>No Products!!!</h3>
        </div>
        @endif
    </div>
</div>

@endsection