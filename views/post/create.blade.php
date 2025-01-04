@extends('layouts.main')
@section('content')

    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputTitle" class="form-label h1">Title of Post</label>
            <input
                value="{{ old('title') }}"
            type="text" name="title" class="form-control" id="exampleInputTitle">

            @error('title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div> 

        <div class="mb-3">
            <label for="exampleInputContent" class="form-label h1">Content</label>
            <textarea type="text" name="post_content" class="form-control" id="exampleInputContent">
            {{ old('post_content') }}
            </textarea> 
            @error('post_content')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div> 

        <div class="mb-3">
            <label for="exampleInputImage" class="form-label h1">Image</label>
            <input
                value="{{ old('image') }}"
            type="text" name="image" class="form-control" id="exampleInputImage" >
            @error('image')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div> 


        <div class="mb-3">
            <label for="category" class="form-label h1">Category</label>
            <select class="form-select" id="category" name="category_id">
                @foreach($categories as $category) :
                <option
                    {{ old('category_id') == $category->id ? 'selected' : '' }}
                value="{{ $category->id }}" >{{ $category->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tags" class="form-label h1">Tags</label>

            <select class="form-select" multiple id="tags" name="tags[]">
                @foreach($tags as $tag) :
                <option
                 {{ old('tags') != null && in_array($tag->id, old('tags')) ? 'selected' : '' }}
                value="{{ $tag->id }}" >{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>

@endsection