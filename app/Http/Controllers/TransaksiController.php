<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\DetailTransaksi;
use App\Models\Member;
use App\Models\Paket;
use App\Models\Outlet;
use App\Models\Pelanggan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $transaksis = Transaksi::with('member')->get();
        return view('transaksis.transaksi', compact('transaksis'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function create(Request $request) {
        $members = Pelanggan::all();
        $pakets = Paket::all();
        $outlets = Outlet::all();
        return view('transaksis.create', compact('members', 'pakets', 'outlets'));
    }
    public function store(Request $request)
    {
        $user = Auth::user();
    
        $subtotal = 0;
        if (is_array($request->details)) {
            foreach ($request->details as $item) {
                $paket = Paket::findOrFail($item['id_paket']);
                $subtotal += $paket->harga * $item['qty'];
            }
        } else {
            // Handle the case where $request->details is null or not an array
            return redirect()->back()->withErrors(['details' => 'Paket tidak valid atau tidak ada.']);
        }
    
        $pajak = $subtotal * 0.0075;
    
        $transaksi = Transaksi::create([
            'kode_invoice' => 'INV-' . time(),
            'id_outlet' => $request->id_outlet,
            'id_member' => $request->id_member,
            'tgl' => $request->tgl,
            'batas_waktu' => $request->batas_waktu,
            'tgl_bayar' => $request->tgl_bayar,
            'biaya_tambahan' => $request->biaya_tambahan ?? null,
            'diskon' => $request->diskon ?? null,
            'id_user' => $user->id,
            'pajak' => $pajak,
            'status' => $request->status,
            'dibayar' => $request->dibayar
        ]);
    
        foreach ($request->details as $item) {
            DetailTransaksi::create([
                'id_transaksi' => $transaksi->id,
                'id_paket' => $item['id_paket'],
                'qty' => $item['qty'],
                'keterangan' => $item['keterangan'] ?? 'Tidak ada keterangan',
            ]);
        }
    
        return redirect()->route('transaksis.transaksi')->with('success', 'Transaksi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $details = DetailTransaksi::with('paket')->get();        
        return view('transaksis.show', compact('details'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
