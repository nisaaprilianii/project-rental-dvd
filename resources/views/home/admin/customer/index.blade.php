@extends('layouts.master')
@section('title', 'Kelola Data Customer')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kelola Data Customer <a href="/customer/tambah" class="btn btn-info" style="float:right;">Tambah</a></h4>
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama Customer</th>
                                    <th>Username</th>
                                    <th>Alamat</th>
                                    <th>no_telp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customer as $u)
                                <tr>
                                    <td>{{ $u->id }}</td>
                                    <td>{{ $u->nama }}</td>
                                    <td>{{ $u->username }}</td>
                                    <td>{{ $u->alamat }}</td>
                                    <td>{{ $u->no_telp }}</td>
                                    <td>
                                        <a href="/customer/{{ $u->id }}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/customer/{{ $u->id }}/hapus" class="btn btn-danger" onClick="return confirm('Yakin Data Akan dihapus??')">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection