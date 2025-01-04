@extends('layouts.main')
@section('content')

<form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="exampleInputTitle" class="form-label h1">Title of Post</label>
            <input type="text" name="title" class="form-control" id="exampleInputTitle" value="{{ $post->title }}">
        </div> 

        <div class="mb-3">
            <label for="exampleInputContent" class="form-label h1">Content</label>
            <textarea type="text" name="post_content" class="form-control" id="exampleInputContent">{{ $post->post_content }}</textarea> 
        </div> 

        <div class="mb-3">
            <label for="exampleInputImage" class="form-label h1">Image</label>
            <input type="text" name="image" class="form-control" id="exampleInputImage" value="{{ $post->image }}">
        </div> 

        <div class="mb-3">
            <label for="category" class="form-label h1">Category</label>
            <select class="form-select" id="category" name="category_id">
                @foreach($categories as $category) :
                <option 
                    {{ $category->id == $post->category->id ? 'selected' : '' }} 
                    value="{{ $category->id }}" >{{ $category->title }}</option>
                @endforeach
            </select>
        </div> 

        <div class="mb-3">
            <label for="tags" class="form-label h1">Tags</label>

            <select class="form-select" multiple id="tags" name="tags[]">
                @foreach($tags as $tag) :
                <option
                    @foreach($post->tags as $postTag) :
                        {{ $tag->id == $postTag->id ? 'selected' : '' }} 
                    @endforeach
                    value="{{ $tag->id }}" >{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection
