<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->hasRole('super_admin')) {
            $data = User::whereHasRole(['admin', 'user'])->paginate();
        } else {
            $data = User::whereHasRole('user')->paginate();
        }
        return view('dash.users.all', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('dash.usrs.add', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:25',
            'email' => 'required|string|email|max:225|unique:users',
            'password' => 'required|min:8',
            'role' => 'required|exists:roles,name',
        ]);

        // Create a new user using the create method
        $user = User::create($request->all());
        // Attach the role to the user using Laratrust
        $user->addRole($validatedData['role']);

        return redirect()->route('dashboard.users.index')->with('success', 'User created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('dash.users.edit', compact('user', 'roles'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:25',
            'email' => 'required|string|email|max:225|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8',
            'role' => 'required|exists:roles,name',
        ]);

        // Update user details
        $user->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $request->filled('password') ? Hash::make($validatedData['password']) : $user->password,
        ]);

        // Sync roles
        $user->syncRoles([$validatedData['role']]);

        return redirect()->route('dashboard.users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
{
    // Check if the user exists
    if ($user) {
        // Prevent deletion of admin
        if (User::whereHasRole('admin')) {
            return redirect()->route('dashboard.users.index')->with('error', 'Cannot delete an admin.');
        }elseif($user->hasRole('super_admin')){

        // Allow deletion of other roles
        $user->delete();
        return redirect()->route('dashboard.users.index')->with('success', 'User deleted successfully.');
    } else {
        return redirect()->route('dashboard.users.index')->with('error', 'User not found.');
    }
}
}

}

