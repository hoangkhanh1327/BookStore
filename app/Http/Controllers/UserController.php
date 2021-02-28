<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());

        return view('components.front-end.info', [
            'user' => $user
        ]);
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::id());

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone;
        $user->address = $request->address;

        $user->save();

        return redirect()->route('home');
    }
}
