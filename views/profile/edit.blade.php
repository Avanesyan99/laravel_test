@extends('layouts.main')
@section('content')

    <div class="h1">EDIT PROFILE</div>

    <form action="{{ route('profile.update', $profile->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="exampleInputFName" class="form-label h3">First Name</label>
            <input type="text" name="first_name" class="form-control" id="exampleInputFName" value="{{ $profile->first_name }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputLName" class="form-label h3">Last Name</label>
            <input type="text" name="last_name" class="form-control" id="exampleInputLName" value="{{ $profile->last_name }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputImage" class="form-label h3">Image</label>
            <input type="text" name="image" class="form-control" id="exampleInputImage" value="{{ $profile->image }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label h3">Gender</label>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioFemale" value="male" @if($profile->gender === 'male') : checked @endif>
                <label class="form-check-label" for="flexRadioFemale">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioMale" value="female" @if($profile->gender === 'female') : checked @endif>
                <label class="form-check-label" for="flexRadioMale">
                    Female
                </label>
            </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputAge" class="form-label h1">Date of Birth</label>
            <input type="date" name="age" class="form-control" id="exampleInputAge" value="{{ $profile->age }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection