<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'judul',
        'kategori',
        'stok',
        'harga_sewa',
    ];
    protected $table = 'barangs';

    public function Barang()
    {
        return $this->hasMany(Barang::class, 'id_barang', 'id');
    }
}
