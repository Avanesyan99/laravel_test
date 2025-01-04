<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $profiles = Profile::all();

        return view('profile.index', compact('profiles'));
    }

    public function create() {
        return view('profile.create');
    }

    public function store() {
        $data  = request()->validate(
            [
                'first_name' => 'string',
                'last_name' => 'string',
                'image' => 'string',
                'gender' => 'string',
                'age' => 'date'
            ]
        );
        
        Profile::create($data);
        return redirect()->route('profile.index');
    }

    public function show(Profile $profile) {
        return view('profile.show', compact('profile'));
    }

    public function edit(Profile $profile) {
        return view('profile.edit', compact('profile'));
    }

    public function update(Profile $profile) {
        $data = request()->validate(
            [
                'first_name' => 'string',
                'last_name' => 'string',
                'image' => 'string',
                'gender' => 'string',
                'age' => 'date'
            ]
        );

        $profile->update($data);
        return redirect()->route('profile.show', $profile->id);
    }

    public function destroy(Profile $profile) {
        $profile->delete();
        return redirect()->route('profile.index');
    }
}
