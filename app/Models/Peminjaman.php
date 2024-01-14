<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $fillable = [
        'id_customer',
        'id_user',
        'id_barang',
        'tgl_peminjaman',
        'tgl_pengembalian',
        'status_peminjaman',
        'jumlah_pinjam',
        'total_harga',
    ];
    
    public function Customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    
    public function Barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id');
    }
}
