@extends('layouts.main')
@section('content')

    <div>
        <div>

          <button type="button" class="btn btn-success"><a href="{{ route('post.create') }}" class="nav-link">Add more</a></button>

        </div>

        @foreach($posts as $post) 
            <div><a href="{{ route('post.show', $post->id) }} ">{{ $post->id }}. {{ $post->title }}</a></div> 
        @endforeach
    </div>

@endsection