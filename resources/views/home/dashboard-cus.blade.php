@extends('layouts.master-cus')
@section('title', 'Dashboard')
@section('content')
<div class="content-wrapper">
    <!-- row end -->
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
