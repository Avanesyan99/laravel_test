@extends('layouts.main')
@section('content')

    <div>
        <div>
            <button type="button" class="btn btn-success"><a href="{{ route('profile.create') }}" class="nav-link">Add more</a></button>
        </div>

        @foreach($profiles as $profile)
            <div><a href="{{ route('profile.show', $profile->id) }}">{{ $profile->id }}. {{ $profile->first_name }} {{ $profile->last_name }}</a></div>
        @endforeach
    </div>
    


@endsection