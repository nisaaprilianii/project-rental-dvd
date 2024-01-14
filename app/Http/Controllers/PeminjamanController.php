<?php

namespace App\Http\Controllers;
use App\Models\Peminjaman;
use App\Models\Customer;
use App\Models\User;
use App\Models\Barang;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index() 
    {
        $peminjaman = Peminjaman::all();
        return view('home.admin.peminjaman.index', compact(['peminjaman']));
    }

    public function create()
    {
        $customer = Customer::all();
        $user = User::all();
        $barang = Barang::all();
        return view('home.admin.peminjaman.tambah', compact('customer', 'user', 'barang'));
    }

    public function cetak()
    {
        $peminjaman = Peminjaman::all();
        return view('home.admin.peminjaman.cetak', compact('peminjaman'));
    }

    public function struk($id)
    {
        $peminjaman = Peminjaman::find($id);
        return view('home.admin.peminjaman.struk', compact('peminjaman'));
    }

    public function store(Request $request)
    {
        Peminjaman::create([
            'id_customer' => $request->id_customer,
            'id_user' => $request->id_user,
            'id_barang' => $request->id_barang,
            'tgl_peminjaman' => $request->tgl_peminjaman,
            'tgl_pengembalian' => $request->tgl_pengembalian,
            'status_peminjaman' => $request->status_peminjaman,
            'jumlah_pinjam' => $request->jumlah_pinjam,
            'total_harga' => $request->total_harga,
            $request->except(['_token']),
        ]);
        return redirect('/peminjaman');
    }

    public function destroy($id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->delete();
        return redirect('/peminjaman');
    }

    public function show($id)
    {
        $peminjaman = Peminjaman::find($id);
        $customer = Customer::all();
        $user = User::all();
        $barang = Barang::all();
        return view('home.admin.peminjaman.edit', compact(['peminjaman', 'customer', 'user', 'barang']));
    }

    public function update($id, Request $request)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->update([
            'id_customer' => $request->id_customer,
            'id_user' => $request->id_user,
            'id_barang' => $request->id_barang,
            'tgl_peminjaman' => $request->tgl_peminjaman,
            'tgl_pengembalian' => $request->tgl_pengembalian,
            'status_peminjaman' => $request->status_peminjaman,
            'jumlah_pinjam' => $request->jumlah_pinjam,
            'total_harga' => $request->total_harga,
            $request->except(['_token']),
        ]);
        return redirect('/peminjaman');
    }
}
