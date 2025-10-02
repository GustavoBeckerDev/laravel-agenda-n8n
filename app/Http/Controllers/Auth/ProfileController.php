<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ProfileUpdateRequest;
use App\Models\Auth\Profile;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function edit(Request $request, Profile $profile): Response
    {
        return view('auth.profile.edit');
    }

    public function update(ProfileUpdateRequest $request, Profile $profile): Response
    {
        $user->update($request->validated());

        return redirect()->route('auth.profile.edit');
    }
}
