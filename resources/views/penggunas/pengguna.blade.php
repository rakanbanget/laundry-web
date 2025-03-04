@extends('layouts.app')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-header">
        {{-- <i class=""></i> --}}
        <a href="{{ route('penggunas.create')}}" class="btn btn-sm btn-primary">Tambah data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>ID_Outlet</th>
                        <th>role</th>
                        <th>Action</th>
                    </tr>
               @foreach ($users as $user)
                    <tr>
                        <td>{{$user -> id}}</td>
                        <td>{{$user -> nama}}</td>
                        <td>{{$user -> username}}</td>
                        <td>{{$user -> id_outlet}}</td>
                        <td>{{$user -> role}}</td>
                            <td>
                                <a href="{{ route('penggunas.edit',$user->id)}}" class="btn btn-sm btn-warning">edit</a>
                                <form action="{{ route('penggunas.destroy', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection