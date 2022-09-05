<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PictureController extends Controller
{
    // public function store(Request $request)

    public function ProfilePicture(Request $request)

    {


        $user = Auth::user();
        if ($request->hasFile('profile_pic')) {
            $file = $request->file('profile_pic');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('/profile_pic/'), $imageName);
            $user->picture = $imageName;
            $user->save();
        }
    }
}
