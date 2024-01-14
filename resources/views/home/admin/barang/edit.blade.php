@extends('layouts.master')
@section('title', 'Form Tambah Data Barang')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Tambah Data Barang</h4>
                    <form class="forms-sample" action="/petugas/barang/{{$barang->id}}/update" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{$barang->judul}}" id="exampleInputUsername1" placeholder="Masukan Judul" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Kategori</label>
                            <select class="form-control" name="kategori" value="{{$barang->kategori}}" id="exampleSelectGender" required>
                                <option>Movie</option>
                                <option>Tv Series</option>
                                <option>Music</option>
                                <option>Game</option>
                                <option>Education</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Stok</label>
                            <input type="number" class="form-control" name="stok" value="{{$barang->stok}}" id="exampleInputEmail1" placeholder="Masukan Stok" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Harga Sewa</label>
                            <input type="number" class="form-control" name="harga_sewa" value="{{$barang->harga_sewa}}" id="exampleInputEmail1" placeholder="Masukan Harga Sewa" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/petugas/barang" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection