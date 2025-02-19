@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Transaksi</h2>
    {{-- <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Tambah Transaksi</a> --}}
    
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Kode Invoice</th>
                <th>Member</th>
                <th>Status</th>
                <th>Dibayar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksis as $transaksi)
            <tr>
                <td>{{ $transaksi->kode_invoice }}</td>
                <td>{{ $transaksi->member->nama }}</td>
                <td>{{ $transaksi->status }}</td>
                <td>{{ $transaksi->dibayar }}</td>
                <td>
                    {{-- <a href="{{ route('transaksi.show', $transaksi->id) }}" class="btn btn-info">Detail</a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection