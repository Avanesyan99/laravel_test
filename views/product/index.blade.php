@extends('layouts.main')
@section('content')

<div>
    <div>
        <button type="button" class="btn btn-success"><a href="{{ route('product.create') }}" class="nav-link">Add more</a></button>
    </div>
    @foreach($products as $product)
        <div><a href="{{ route('product.show', $product->id) }}">{{ $product->id }}. {{ $product->name }}</a></div>
    @endforeach

</div>

@endsection