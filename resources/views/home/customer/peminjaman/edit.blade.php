@extends('layouts.master-cus')
@section('title', 'Form Edit Data Peminjaman')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Edit Data Peminjaman</h4>
                    <form class="forms-sample" action="/customer/peminjaman/{{$peminjaman->id}}/update" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Customer</label>
                            <select name="id_customer" id="" class="form-control" required>
                                @foreach($customer as $u)
                                <option value="{{$u->id}}">{{$u->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Admin</label>
                            <select name="id_user" id="" class="form-control" required>
                                @foreach($user as $u)
                                <option value="{{$u->id}}">{{$u->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Judul</label>
                            <select name="id_barang" id="" class="form-control" required>
                                @foreach($barang as $u)
                                <option value="{{$u->id}}">{{$u->judul}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Tanggal Peminjaman</label>
                            <input type="date" class="form-control" name="tgl_peminjaman" value="{{$peminjaman->tgl_peminjaman}}" id="exampleInputUsername1" placeholder="Masukan Tanggal Peminjaman" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Tanggal Pengembalian</label>
                            <input type="date" class="form-control" name="tgl_pengembalian" value="{{$peminjaman->tgl_pengembalian}}" id="exampleInputUsername1" placeholder="Masukan Tanggal Pengembalian" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Status Peminjaman</label>
                            <select class="form-control" name="status_peminjaman" value="{{$peminjaman->status_peminjaman}}" id="exampleSelectGender" required>
                                <option>Belum Diproses</option>
                                <option>Diproses</option>
                                <option>Dipinjam</option>
                                <option>Dikembalikan</option>
                                <option>DIbatalkan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah Pinjam</label>
                            <input type="number" class="form-control" name="jumlah_pinjam" value="{{$peminjaman->jumlah_pinjam}}" id="exampleInputEmail1" placeholder="Masukan Jumlah Pinjam" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Total Harga</label>
                            <input type="number" class="form-control" name="total_harga" value="{{$peminjaman->total_harga}}" id="exampleInputEmail1" placeholder="Masukan Total Harga" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection