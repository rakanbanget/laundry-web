<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Outlet;
use App\Http\Requests\StorePaketRequest;
use App\Http\Requests\UpdatePaketRequest;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id_outlet = null)
    {
        //
        if ($id_outlet) {
            $pakets = Paket::where('id_outlet', $id_outlet)->get();
        } else {
            $pakets = Paket::all();
        }
        return view('pakets.paket', compact('pakets'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pakets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $allowedJenis = ['kiloan', 'selimut', 'bedcover', 'kaos', 'lain'];

        $request->validate([
            'id_outlet' => 'required|numeric',
            'jenis' => 'required|in:' . implode(',',$allowedJenis),
            'nama_paket' => 'required',
            'harga' => 'required|numeric'
        ],);

        Paket::create($request->all());
        return redirect()->route('pakets.paket');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paket $id)
    {
        return view('pakets.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paket $id)
    {
        //
        $allowedJenis = ['kiloan', 'selimut', 'bedcover', 'kaos', 'lain'];

        $request->validate([
            'id_outlet' => 'required|numeric',
            'jenis' => 'required|in:' . implode(',',$allowedJenis),
            'nama_paket' => 'required',
            'harga' => 'required|numeric'
        ],);

        $id->update($request->all());
        return redirect()->route('pakets.paket');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paket $id)
    {
        $id->delete();

        return redirect()->route('pakets.paket');
    }
}
