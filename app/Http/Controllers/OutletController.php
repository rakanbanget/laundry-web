<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use App\Http\Requests\StoreOutletRequest;
use App\Http\Requests\UpdateOutletRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $outlets = Outlet::all();
        return view('outlets.outlet', compact('outlets'));
    }

    public function create() {
        return view('outlets.create');
    }

    public function store(Request $request) 
    {
        // dd($request->all());
        $request->validate([
            'nama'   => 'required|string|max:255',
            'alamat' => 'required',  
            'tlp'    => 'required|string|max:14',
        ], 
    );

    Outlet::create($request->all());
    return redirect()->route('outlet.index');
    }

    public function edit(Outlet $id) {
        return view('outlets.edit', compact('id'));
    }

    public function update(Request $request,Outlet $id ) {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required',
            'tlp' => 'required|string|max:14',
        ]);

        $id->update($request->all());
        return redirect()->route('outlet.index')
            ->with('success', 'Outlet updated successfully.');
    }

    public function destroy(Outlet $id)  {
        $id->delete();

        return redirect()->route('outlet.index')->with('sucsess','data berhasil di hapus');
    }
}