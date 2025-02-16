<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index() {
        $users = User::all();
        return view('penggunas.pengguna', compact('users'));
    }

    public function create() {
        return view('penggunas.create');
    }

    public function store(Request $request) {
        $allowedrole = ['admin', 'kasir', 'owner'];

        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'id_outlet' => 'required|numeric',
            'role' => 'required|in:' . implode(',', $allowedrole)
        ]);

        User::create($request->all());
        return redirect()->route('penggunas.pengguna');
    }

    public function edit(User $id) {
        return view('penggunas.edit', compact('id'));
    }

    public function update(Request $request, User $id){
        $allowedrole = ['admin', 'kasir', 'owner'];

        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'id_outlet' => 'required|numeric',
            'role' => 'required|in:' . implode(',', $allowedrole)
        ]);

        $id->update($request->all());
        return redirect()->route('penggunas.pengguna');
    }

    public function destroy(User $id) {
        $id->delete();

        return redirect()->route('penggunas.pengguna');
    }
}
