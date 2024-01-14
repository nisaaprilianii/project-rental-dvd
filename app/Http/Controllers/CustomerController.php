<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() 
    {
        $customer = Customer::all();
        return view('home.admin.customer.index', compact(['customer']));
    }

    public function create()
    {
        return view('home.admin.customer.tambah');
    }

    public function store(Request $request)
    {
        Customer::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            $request->except(['_token']),
        ]);
        return redirect('/petugas/customer');
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('/petugas/customer');
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return view('home.admin.customer.edit', compact(['customer']));
    }

    public function update($id, Request $request)
    {
        $customer = Customer::find($id);
        $customer->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            $request->except(['_token']),
        ]);
        return redirect('/petugas/customer');
    }
}
