<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function list()
    {
        if (auth()->user()->role) {
            return view('user/list', [
                'users' => User::paginate(20)
            ]);
        }else{
            abort(404);
        }
    }


    public function register()
    {
        return view('user.register');
    }


    public function store(Request $request)
    {
        if ($request->input('password') == $request->input('password_1')) {

            $request->validate([
                "first_name" => 'required|string|max:100',
                "last_name" => 'required|string|max:100',
                'email' => 'required|email|unique:users',
                "password" => 'required|string|max:100',
                'password_1' => 'required'
            ]);


            $newUser = User::create([
                "first_name" => $request->input('first_name'),
                "last_name" => $request->input('last_name'),
                "email" => $request->input('email'),
                "password" => Hash::make($request->password),
                "token" => Str::random(40),
            ]);
            Cart::create(['user_id' => $newUser->id, 'total' => 0]);
            auth()->login($newUser);

            return redirect()->route('home')->with('message', 'User created successfully');
        } else {
            throw ValidationException::withMessages(['password' => 'This value is incorrect']);
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function show(User $user)
    {
        return view('user.profile', [
            "user" => $user
        ]);
    }


    public function update(User $user)
    {
        // dd(Auth::user()->role);
        if (Auth::user()->role == 1 || Auth::user()->id == $user->id) {
            return view('user.update', [
                "user" => $user
            ]);
        } else {
            return abort(404);
        }
    }

    public function updateStore(Request  $request, User $user)
    {
        $user->id !== auth()->user()->id && abort(404);
        $request->validate([
            "first_name" => "required|max:100|min:2",
            "last_name" => "required|max:100|min:2",
            "email" => "required|max:100|min:5",
        ]);


        $avatar = $request->file('avatar');

        $data = [
            "first_name" => $request->input('first_name'),
            "last_name" => $request->input('last_name'),
            "email" => $request->input('email'),
            "phone" => $request->input('phone'),
            "bio" => $request->input('bio'),
            "address" => $request->input('address'),
        ];

        if ($avatar) {
            $path = $avatar->store('public/avatars');
            $url = Storage::url($path);
            $data = array_merge($data, ["avatar" => $url]);
        }
        $user->update($data);
        return redirect()->route('user.update', $user->id)->with(['message' => "Profile update successful"]);
    }



    public function delete(User $user)
    {

        !auth()->user()->role == 1 && abort(404);
        $user->delete();
        return redirect()->route('user.list')->with('message', 'User is successfully deleted');
    }
}
