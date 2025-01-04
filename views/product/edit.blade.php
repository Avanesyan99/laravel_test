@extends('layouts.main')
@section('content')

    <div class="center h1 m-3">UPDATE PAGE</div>

        <form action="{{ route('product.update', $product-id) }}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="exampleInputName" class="form-label h3">Name of Product</label>
            <input type="text" name="name" class="form-control" id="exampleInputName" value="{{ $product->name }}">
        </div> 

        <div class="mb-3">
            <label for="exampleInputImage" class="form-label h3">Image</label>
            <input type="text" name="image" class="form-control" id="exampleInputImage" value="{{ $product->image }}">
        </div> 

        <div class="mb-3">
            <label for="exampleInputDescription" class="form-label h3">Description</label>
            <textarea type="text" name="description" class="form-control" id="exampleInputDescription">{{ $product->description }}</textarea> 
        </div> 

        <div class="mb-3">
            <label for="exampleInputPrice" class="form-label h3">Select price (INTEGER)</label>
            <input type="text" name="price" class="form-control" id="exampleInputPrice" value="{{ $product->price }}">
        </div> 

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection