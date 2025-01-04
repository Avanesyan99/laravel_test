@extends('layouts.main')
@section('content') 

    <form action="{{ route('product.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="exampleInputName" class="form-label h1">Name of Product</label>
            <input type="text" name="name" class="form-control" id="exampleInputName">
        </div> 

        <div class="mb-3">
            <label for="exampleInputImage" class="form-label h1">Image</label>
            <input type="text" name="image" class="form-control" id="exampleInputImage">
        </div> 

        <div class="mb-3">
            <label for="exampleInputDescription" class="form-label h1">Description</label>
            <textarea type="text" name="description" class="form-control" id="exampleInputDescription"></textarea> 
        </div> 

        <div class="mb-3">
            <label for="exampleInputPrice" class="form-label h1">Select price (INTEGER)</label>
            <input type="text" name="price" class="form-control" id="exampleInputPrice">
        </div> 

        <button type="submit" class="btn btn-primary">Create</button>
    </form>

@endsection