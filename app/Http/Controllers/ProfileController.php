<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class ProfileController extends Controller
{
    public function index(User $user) {
        return view('profiles.index', [
            "user" => $user
        ]);
    }

    public function edit(User $user) {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user) {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => '',
            'image' => '',
        ]);
        auth()->user()->profile->update($data);

        return redirect('/profile/' . $user->id);
    }
}
