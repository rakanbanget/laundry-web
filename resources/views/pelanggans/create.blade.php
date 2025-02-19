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
            <form action="{{ route('pelanggans.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        value="{{ old('nama') }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
                        value="{{ old('alamat') }}">
                </div>
                <div class="form-group">
                    <label for="tlp">No Telephone</label>
                    <input type="text" class="form-control @error('tlp') is-invalid @enderror" id="tlp" name="tlp"
                        value="{{ old('tlp') }}">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <select name="jenis_kelamin" id="jenis" value="{{ old('jenis_kelamin') }}">
                        <option value="">--- Pilih Jenis ---</option>
                        <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : ''}}>Laki-Laki</option>
                        <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : ''}}>Perempuan</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection