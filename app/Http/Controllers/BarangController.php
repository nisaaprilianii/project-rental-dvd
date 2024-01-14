<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
        public function index() 
        {
            $barang = Barang::all();
            return view('home.admin.barang.index', compact(['barang']));
        }
    
        public function create()
        {
            return view('home.admin.barang.tambah');
        }
    
        public function store(Request $request)
        {
            Barang::create([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'stok' => $request->stok,
                'harga_sewa' => $request->harga_sewa,
                $request->except(['_token']),
            ]);
            return redirect('/petugas/barang');
        }
    
        public function destroy($id)
        {
            $barang = Barang::find($id);
            $barang->delete();
            return redirect('/petugas/barang');
        }
    
        public function show($id)
        {
            $barang = Barang::find($id);
            return view('home.admin.barang.edit', compact(['barang']));
        }
    
        public function update($id, Request $request)
        {
            $barang = Barang::find($id);
            $barang->update([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'stok' => $request->stok,
                'harga_sewa' => $request->harga_sewa,
                $request->except(['_token']),
            ]);
            return redirect('/petugas/barang');
        }
}
