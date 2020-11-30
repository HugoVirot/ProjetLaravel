<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()            //affiche page avec les infos du compte
    {
        $user = Auth::user();
        return view('user.account', ['user' => $user]);
    }


    public function showUpdatePage()
    {
        $userId = auth()->user()->id;
        $user = User::findOrFail($userId);
        return view('user.update', ['user' => $user]);
    }


    public function update(Request $request) 
    {        
        $request->validate([ 
            'email' => 'required|max:50',
            'name' => 'required|max:50',
        ]);

        $user = $request->user();
        $user->email = $request->input('email');      
        $user->name = $request->input('name');
        $user->save();
        return redirect()->route('user.update');
    }


    public function profil(User $user)
    {
        $user->load('quacks.comments.user');

        return view('user.profil', ['user' => $user]);
    }
}
