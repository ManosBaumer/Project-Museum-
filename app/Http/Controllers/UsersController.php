<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        // Valideer de invoer
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|confirmed',
        'is_admin' => 'required|boolean',
    ]);

    // Maak een nieuwe gebruiker aan
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password), // Versleutel het wachtwoord
        'is_admin' => $request->is_admin,
    ]);

    return redirect()->route('Users.index')->with('success', 'User created successfully!');
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
            // Valideer de invoer
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8|confirmed',
            'is_admin' => 'required|boolean',
        ]);

        // Update gebruiker
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password); // Alleen bij wijziging
        }
        $user->is_admin = $request->is_admin;
        $user->save();

        return redirect()->route('Users.index')->with('success', 'User updated successfully!');
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('Users.index')->with('success', 'User deleted successfully.');
    }
}
