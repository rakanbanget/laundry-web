@extends('layouts.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Tambah data
        </div>
        <div class="card-body">
            <form action="{{ route('transaksis.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="role">Outlet:</label>
                    <select name="id_outlet" id="id_outlet" value="{{ old('role') }}">
                        <option value="">--- Pilih Outlet ---</option>
                        @foreach ($outlets as $outlet)
                        <option value="{{ $outlet->id }}">{{ $outlet->nama }}</option>                   
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="member">Member:</label>
                    <select name="id_member" id="id_member" class="form-control">
                        <option value="">--- Pilih Outlet ---</option>
                        @foreach ($members as $member)
                        <option value="{{ $member->id }}">{{ $member->nama }}</option>                   
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal_transaksi">Tanggal Transaksi:</label>
                    <input type="datetime-local" name="tgl" class="form-control @error('tgl') is-invalid @enderror" id="tgl"
                        value="{{ old('tgl') }}">
                </div>
                <div class="form-group">
                    <label for="batas_waktu">Batas Waktu:</label>
                    <input type="datetime-local" class="form-control @error('batas_waktu') is-invalid @enderror" id="batas_waktu" name="batas_waktu"
                        value="{{ old('batas_waktu') }}">
                </div>
                <div class="form-group">
                    <label for="tanggal_transaksi">Tanggal Bayar:</label>
                    <input type="datetime-local" name="tgl_bayar" class="form-control @error('tgl') is-invalid @enderror" id="tgl_bayar"
                        value="{{ old('tgl_bayar') }}">
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select name="status" id="status" value="{{ old('status') }}">
                        <option value="">--- Pilih Jenis ---</option>
                        <option value="baru" {{ old('status') == 'baru' ? 'selected' : ''}}>Baru</option>
                        <option value="proses" {{ old('status') == 'proses' ? 'selected' : ''}}>Proses</option>
                        <option value="selesai" {{ old('status') == 'selesai' ? 'selected' : ''}}>selesai</option>
                        <option value="diambil" {{ old('status') == 'diambil' ? 'selected' : ''}}>diambil</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dibayar">Pembayaran:</label>
                    <select name="dibayar" id="dibayar" value="{{ old('dibayar') }}">
                        <option value="">--- Pilih Jenis ---</option>
                        <option value="belum_dibayar" {{ old('dibayar') == 'belum_dibayar' ? 'selected' : ''}}>Belum dibayar</option>
                        <option value="dibayar" {{ old('dibayar') == 'dibayar' ? 'selected' : ''}}>Di bayar</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="paket">Paket :</label>
                    <select name="details[0][id_paket]" id="dibayar" value="{{ old('dibayar') }}">
                       @foreach ($pakets as $paket)
                        <option value="{{ $paket->id}}">{{ $paket->nama_paket}}</option>
                       @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="qty">Jumlah (Qty):</label>
                    <input type="number" class="form-control" id="pembayaran" name="details[0][qty]" required min="1"
                        value="{{ old('pembayaran') }}">
                </div>
                <div class="form-group">
                    <label for="qty">Diskon:</label>
                    <input type="number" class="form-control" id="diskon" name="diskon" 
                        value="{{ old('diskon') }}">
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection