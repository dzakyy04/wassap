<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => 'required|min:4|max:255',
        ], [
            'name.required' => 'Kolom nama harus diisi.',
            'name.max' => 'Kolom nama tidak boleh lebih dari 255 karakter.',
            'username.required' => 'Kolom username harus diisi.',
            'username.min' => 'Kolom username minimal terdiri dari 3 karakter.',
            'username.max' => 'Kolom username tidak boleh lebih dari 255 karakter.',
            'username.unique' => 'Username sudah digunakan.',
            'email.required' => 'Kolom email harus diisi.',
            'email.email' => 'Kolom email harus berupa alamat email yang valid.',
            'email.unique' => 'Alamat email sudah digunakan.',
            'password.required' => 'Kolom password harus diisi.',
            'password.min' => 'Kolom password minimal terdiri dari 4 karakter.',
            'password.max' => 'Kolom password tidak boleh lebih dari 255 karakter.',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Pendaftaran berhasil, silahkan login!');
    }
}
