@extends('layouts.master')
@section('title', 'Kelola Data Barang')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kelola Data Barang <a href="/petugas/barang/tambah" class="btn btn-info" style="float:right;">Tambah</a></h4>
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Stok</th>
                                    <th>Harga Sewa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $u)
                                <tr>
                                    <td>{{ $u->id }}</td>
                                    <td>{{ $u->judul }}</td>
                                    <td>{{ $u->kategori }}</td>
                                    <td>{{ $u->stok }}</td>
                                    <td>{{ $u->harga_sewa }}</td>
                                    <td>
                                        <a href="/petugas/barang/{{ $u->id }}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/petugas/barang/{{ $u->id }}/hapus" class="btn btn-danger" onClick="return confirm('Yakin Data Akan dihapus??')">Hapus</a>
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