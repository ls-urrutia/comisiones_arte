<?php

namespace App\Http\Controllers\Artista;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Artista;
use Illuminate\Support\Facades\Auth;

class ArtistaController extends Controller
{

    function create(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'email' => 'required|email|unique:artistas,email',
            'seudonimo' => 'required',
            'password' => 'required|min:5|max:30',
            'cpassword' => 'required|min:5|max:30|same:password'
        ]);

        $artista = new Artista();
        $artista->name = $request->name;
        $artista->email = $request->email;
        $artista->seudonimo = $request->seudonimo;
        $artista->password = \Hash::make($request->password);
        $save = $artista->save();

        if ($save) {
            return redirect()->back()->with('success', 'You are now registered succesfully as Artist');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong, failed to register');
        }
    }

    function check(Request $request){
        $request->validate([
            'email' => 'required|email|exists:artistas,email',
            'password' => 'required|min:5|max:30'


        ],[
            'email.exists' => 'This email does not exists in registered artists'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('artista')->attempt($creds) ) {
            return redirect()->route('artista.home');
        }else{
            return redirect()->route('artista.login')->with('fail','Incorrect Credentials');
        }

    }

}
