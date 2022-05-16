<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Foundation\Auth\ConfirmsPasswords;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $users = User::all();

            if (Auth::user()->id == 1) {

                return view('manageAdmins', compact('users'));
            }

        return view('home');
    }
    public function create(){

            if (Auth::user()->id == 1) {

                return view('register');
            }

        return view('home');
    }

    public function store(Request $request)
    {


            if (Auth::user()->id == 1) {

                $data = $request->validate([
                    'name' => 'required|min:3',
                    'email' => 'required|email|unique:users',
                    'password' => 'required|min:8|confirmed' ,

                ]);
                $user = User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                ]);
                $user->save();
                return redirect()->route('admin.index')->with('status', 'Admin Added');
            }

        return view('home');
    }
    public function destroy($id){


            if (Auth::user()->id == 1){
                $user = User::findOrFail($id);

                $user->delete();

                return redirect()->route('admin.index')->with('status', 'Admin deleted');
            }


        return view('home');
    }


}
