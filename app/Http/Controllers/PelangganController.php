<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $members = Pelanggan::all();
        return view('pelanggans.pelanggan', compact('members'));
    }

    /**
     * Store a newly created resource in storage.
     */

     public function create() {
        return view('pelanggans.create');
     }
    public function store(Request $request)
    {
        //
        $allowedjenis = ['L', 'P'];
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required|in:' . implode(',',$allowedjenis),
            'tlp' => 'required|numeric'
        ]);

        Pelanggan::create($request->all());
        return redirect()->route('pelanggans.pelanggan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(Pelanggan $id)  {
     return view('pelanggans.edit', compact('id'));   
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelanggan $id)
    {
        //
        $allowedjenis = ['L', 'P'];
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required|in:' . implode(',',$allowedjenis),
            'tlp' => 'required|numeric'
        ]);

        $id->update($request->all());
        return redirect()->route('pelanggans.pelanggan');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggan $id)
    {
        //
        $id->delete();
        return redirect()->route('pelanggans.pelanggan');
    }
}
