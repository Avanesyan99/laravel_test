@extends('layouts.main')
@section('content')

<form action="{{ route('profile.store') }}" method="post">
    @csrf

    <div class="mb-3">
        <label for="exampleInputFName" class="form-label h1">First Name</label>
        <input type="text" name="first_name" class="form-control" id="exampleInputFName">
    </div>

    <div class="mb-3">
        <label for="exampleInputLName" class="form-label h1">Last Name</label>
        <input type="text" name="last_name" class="form-control" id="exampleInputLName">
    </div>

    <div class="mb-3">
        <label for="exampleInputImage" class="form-label h1">Image</label>
        <input type="text" name="image" class="form-control" id="exampleInputImage">
    </div>

    <div class="mb-3">
        <label for="" class="form-label h1">Gender</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="flexRadioFemale" value="male" checked>
            <label class="form-check-label" for="flexRadioFemale">
                Male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="flexRadioMale" value="female">
            <label class="form-check-label" for="flexRadioMale">
                Female
            </label>
        </div>
    </div>

    <div class="mb-3">
        <label for="exampleInputAge" class="form-label h1">Date of Birth</label>
        <input type="date" name="age" class="form-control" id="exampleInputAge">
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection