@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<div class="content-wrapper">
    <!-- row end -->
    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card bg-facebook d-flex align-items-center">
                <div class="card-body py-5">
                    <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                        <i class="mdi mdi-facebook text-white icon-lg"></i>
                        <div class="ms-3 ml-md-0 ml-xl-3">
                            <h5 class="text-white font-weight-bold">2.62 Subscribers</h5>
                            <p class="mt-2 text-white card-text">You main list growing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card bg-google d-flex align-items-center">
                <div class="card-body py-5">
                    <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                        <i class="mdi mdi-google-plus text-white icon-lg"></i>
                        <div class="ms-3 ml-md-0 ml-xl-3">
                            <h5 class="text-white font-weight-bold">3.4k Followers</h5>
                            <p class="mt-2 text-white card-text">You main list growing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card bg-twitter d-flex align-items-center">
                <div class="card-body py-5">
                    <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                        <i class="mdi mdi-twitter text-white icon-lg"></i>
                        <div class="ms-3 ml-md-0 ml-xl-3">
                            <h5 class="text-white font-weight-bold">3k followers</h5>
                            <p class="mt-2 text-white card-text">You main list growing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Histori Transaksi Peminjaman</h4>
                    <div class="table-responsive">
                    <table id="dataTable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama Customer</th>
                                    <th>Nama Admin</th>
                                    <th>Judul</th>
                                    <th>Tanggal Peminjaman</th>
                                    <th>Tanggal Pengembalian</th>
                                    <th>Status Peminjaman</th>
                                    <th>Jumlah Pinjam</th>
                                    <th>Total Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peminjaman as $u)
                                <tr>
                                    <td>{{ $u->id }}</td>
                                    <td>{{ $u->customer->nama }}</td>
                                    <td>{{ $u->user->name }}</td>
                                    <td>{{ $u->barang->judul }}</td>
                                    <td>{{ $u->tgl_peminjaman }}</td>
                                    <td>{{ $u->tgl_pengembalian }}</td>
                                    <td>{{ $u->status_peminjaman }}</td>
                                    <td>{{ $u->jumlah_pinjam }}</td>
                                    <td>{{ $u->total_harga }}</td>
                                    <td>
                                        <a href="/peminjaman/{{ $u->id }}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/peminjaman/{{$u->id}}/struk" target="_blank" class="btn btn-success"><span class="fa fa-print"></span>Cetak Struk</a>
                                        <a href="/peminjaman/{{ $u->id }}/hapus" class="btn btn-danger" onClick="return confirm('Yakin Data Akan dihapus??')">Hapus</a>
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
    <!-- row end -->
</div>
@endsection
