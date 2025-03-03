@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Transaksi</h2>
    {{-- <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Tambah Transaksi</a> --}}

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Transaksi</th>
                <th>Nama Paket</th>
                <th>Jumlah Barang</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($details as $detail)
            <tr>
                <td>{{ $detail->id }}</td>
                <td>{{ $detail->id_transaksi }}</td>
                <td>{{ $detail->paket->nama_paket}}</td>
                <td>{{ $detail->qty }}</td>
                <td>{{ $detail->keterangan }}</td>
                <td>
                    <a href="" class="btn btn-info">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection