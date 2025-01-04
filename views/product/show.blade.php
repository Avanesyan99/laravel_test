@extends('layouts.main')
@section('content')

    <div>
        <div>{{ $product->id }}. {{ $product->name }}</div>
        <div>{{ $product->image }}</div>
        <div>{{ $product->description }}</div>
        <div>{{ $product->price }}</div>
    </div>


    <div class="btn-group mt-3" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary"><a href="{{ route('product.index', $product) }}" class="nav-link">BACK</a></button>
        <button type="button" class="btn btn-primary"><a href="{{ route('product.edit', $product) }}" class="nav-link">EDIT</a></button>
        <form action="{{ route('product.delete', $product->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-primary" value="DELETE">
        </form>
    
    </div>

@endsection