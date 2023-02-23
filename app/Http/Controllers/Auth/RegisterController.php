<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\PostLiked;

class RegisterController extends Controller
{

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
    //dd($request->only('email','password'));
      $this->validate($request, [
        'name' => 'required|max:255',
        'nazwisko' => 'required|max:255',
        'email' => 'required|email|max:255',
        'telefon' => 'required|max:12',
        'password' => 'required|confirmed',
      ]);

      User::create([
        'name' => $request->name,
        'nazwisko' => $request->nazwisko,
        'email' => $request->email,
        'telefon' => $request->telefon,
        'password' => Hash::make($request->password),
      ]);

      auth()->attempt($request->only('email','password'));
      
      Mail::to('patryk.platek@onet.pl')->send(new PostLiked());
      return redirect()->route('dashboard');

    }
}
