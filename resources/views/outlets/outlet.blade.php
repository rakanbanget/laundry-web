@extends('layouts.app')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-header">
        {{-- <i class=""></i> --}}
        <a href="{{ route('outlets.create')}}" class="btn btn-sm btn-primary">Tambah data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telephone</th>
                        <th>Action</th>
                    </tr>
               @foreach ($outlets as $outlet)
                    <tr>
                        <td>{{$outlet -> id}}</td>
                        <td>{{$outlet -> nama}}</td>
                        <td>{{$outlet -> alamat}}</td>
                        <td>{{$outlet -> tlp}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning">edit</a>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$outlet->id}}">
                                hapus
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection