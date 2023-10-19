<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showProfile()
    {
        return view('users.ownprofile');
    }

    public function ViewProfile(int $id)
    {
        $user = User::findOrFail($id);
        return view('users.viewprofile', compact('user'));
    }

    public function editProfile(int $id)
    {
        $user = User::findOrFail($id);
        return view('users.editprofile', compact('user'));
    }

    public function updateProfile()
    {

    }

    public function adminControl()
    {

    }

    public function adminUpdate()
    {

    }

    public function destroy(int $id)
    {
        $user = User::findOrFail($id);
        $user->destroy();

        return back()->with('success', 'Zawh fel a ni.');
    }
}
