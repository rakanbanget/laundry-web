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
            <form action="{{ route('pakets.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="jenis">Jenis:</label>
                    <select name="jenis" id="jenis" value="{{ old('jenis') }}">
                        <option value="">--- Pilih Jenis ---</option>
                        <option value="kiloan" {{ old('jenis') == 'kiloan' ? 'selected' : ''}}>Kiloan</option>
                        <option value="kiloan" {{ old('jenis') == 'selimut' ? 'selected' : ''}}>Selimut</option>
                        <option value="kiloan" {{ old('jenis') == 'bedcover' ? 'selected' : ''}}>Bed Cover</option>
                        <option value="kiloan" {{ old('jenis') == 'kaos' ? 'selected' : ''}}>Kaos</option>
                        <option value="kiloan" {{ old('jenis') == 'lain' ? 'selected' : ''}}>lain</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">ID Outlet</label>
                    <input type="text" class="form-control @error('id_outlet') is-invalid @enderror" id="id_outlet" name="id_outlet"
                        value="{{ old('id_outlet') }}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Paket</label>
                    <input type="text" class="form-control @error('nama_paket') is-invalid @enderror" id="nama_paket" name="nama_paket"
                        value="{{ old('nama_paket') }}">
                </div>
                <div class="form-group">
                    <label for="harga_jual">Harga:</label>
                    <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga"
                        value="{{ old('harga') }}">
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection