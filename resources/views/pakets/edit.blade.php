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
            <form action="{{ route('pakets.update', $id->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="jenis">Jenis:</label>
                    <select name="jenis" id="jenis" value="{{ $id->jenis }}">
                        <option value="">--- Pilih Jenis ---</option>
                        <option value="kiloan" {{ $id->jenis == 'kiloan' ? 'selected' : ''}}>Kiloan</option>
                        <option value="kiloan" {{ $id->jenis == 'selimut' ? 'selected' : ''}}>Selimut</option>
                        <option value="kiloan" {{ $id->jenis == 'bedcover' ? 'selected' : ''}}>Bed Cover</option>
                        <option value="kiloan" {{ $id->jenis == 'kaos' ? 'selected' : ''}}>Kaos</option>
                        <option value="kiloan" {{ $id->jenis == 'lain' ? 'selected' : ''}}>lain</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">ID Outlet</label>
                    <input type="text" class="form-control @error('id_outlet') is-invalid @enderror" id="id_outlet" name="id_outlet"
                        value="{{ $id->id_outlet }}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Paket</label>
                    <input type="text" class="form-control @error('nama_paket') is-invalid @enderror" id="nama_paket" name="nama_paket"
                        value="{{ $id->nama_paket }}">
                </div>
                <div class="form-group">
                    <label for="harga_jual">Harga:</label>
                    <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga"
                        value="{{ $id->harga }}">
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection