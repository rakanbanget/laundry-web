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
            <form action="{{ route('penggunas.update', $id->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        value="{{ $id->nama }}">
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username"
                        value="{{ $id->username }}">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password"
                        value="{{ $id->password }}">
                </div>
                <div class="form-group">
                    <label for="id_outlet">ID Outlet:</label>
                    <input type="text" class="form-control @error('id_outlet') is-invalid @enderror" id="id_outlet" name="id_outlet"
                        value="{{ $id->id_outlet }}">
                </div>
                <div class="form-group">
                    <label for="role">Role:</label>
                    <select name="role" id="role" value="{{ $id->role }}">
                        <option value="admin" {{ $id->role == 'admin' ? 'selected' : ''}}>Admin</option>
                        <option value="kasir" {{ $id->role == 'kasir' ? 'selected' : ''}}>Kasir</option>
                        <option value="owner" {{ $id->role == 'owner' ? 'selected' : ''}}>Owner</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection