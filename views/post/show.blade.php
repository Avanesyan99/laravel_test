@extends('layouts.main')
@section('content')

    <div class="">
            <div>{{ $post->id }}. {{ $post->title }}</div> 
            <div>{{ $post->post_content }}</div> 
            <div>{{ $post->image }}</div> 
            <div>{{ $post->category_id }}</div> 
    </div>

    <div>
        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-success"> EDIT</a> 
    </div>
    <div>
        <a href="{{ route('post.index') }}" class="btn btn-success"> BACK</a>
    </div>
    <div>
        <form action="{{ route('post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn-danger" value="DELETE">
        </form>
    </div>

@endsection