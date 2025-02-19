@extends('layouts.app')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>tlp</th>
                        <th>Action</th>
                    </tr>
               @foreach ($members as $member)
                    <tr>
                        <td>{{$member -> id}}</td>
                        <td>{{$member -> nama}}</td>
                        <td>{{$member -> alamat}}</td>
                        <td>{{$member -> jenis_kelamin}}</td>
                        <td>{{$member -> tlp}}</td>
                            <td>
                                <a href="{{ route('pelanggans.edit',$member->id)}}" class="btn btn-sm btn-warning">edit</a>
                                <form action="{{ route('pelanggans.destroy', $member->id) }}" method="POST" style="display:inline;">
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