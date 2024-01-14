@extends('layouts.master')
@section('title', 'Form Tambah Data Customer')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Tambah Data Customer</h4>
                    <form class="forms-sample" action="/customer/simpan" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Customer</label>
                            <input type="text" class="form-control" name="nama" id="exampleInputUsername1" placeholder="Masukan Nama Customer" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Username</label>
                            <input type="text" class="form-control" name="username" id="exampleInputUsername1" placeholder="Masukan Username Anda" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Masukan Password Anda" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="exampleInputPassword1" placeholder="Masukan Alamat Anda" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">No Telepon</label>
                            <input type="text" class="form-control" name="no_telp" id="exampleInputPassword1" placeholder="Masukan No Telepon Anda" required>
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