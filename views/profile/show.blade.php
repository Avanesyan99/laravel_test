@extends('layouts.main')
@section('content')

    <div>
        <div>{{ $profile->id }}. {{ $profile->first_name }} {{ $profile->last_name }}</div>
        <div>{{ $profile->image }}</div>
        <div>{{ $profile->gender }}</div>
        <div>{{ $profile->age }}</div>
    </div>


    <div class="btn-group mt-3" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary"><a href="{{ route('profile.index', $profile) }}" class="nav-link">BACK</a></button>
        <button type="button" class="btn btn-primary"><a href="{{ route('profile.edit', $profile->id) }}" class="nav-link">EDIT</a></button>
        <form action="{{ route('profile.delete', $profile->id) }}" method="post">
            @csrf
            @method('delete')
             <input type="submit" class="btn btn-primary" value="DELETE">
        </form>

    </div>

@endsection