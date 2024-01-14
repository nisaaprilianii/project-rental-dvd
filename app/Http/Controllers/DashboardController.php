<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Barang;
use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_customer = Customer::count();
        $jumlah_barang = Barang::count();
        $peminjaman = Peminjaman::Select()->orderBy('tgl_peminjaman', 'desc')
                        ->limit(5)
                        ->get();

        $today = Carbon::today();
        $endDate = Carbon::today()->addDays(7);
        $total_minggu = Peminjaman::Select(Peminjaman::raw('SUM(total_harga) as total_price'))
                            ->whereBetween('tgl_peminjaman', [$today, $endDate])->first();

        return view('home.dashboard', compact('peminjaman', 'jumlah_customer', 'jumlah_barang'), ['total_minggu' => $total_minggu]);
    }

    public function indexCustomer()
    {
        $peminjaman = Peminjaman::Select()->where('id_customer', Auth::User()->id)->get();
        return view('home.dashboard-cus', compact('peminjaman'));
    }
}
