<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $fillable = [
        'nama',
        'username',
        'password',
        'alamat',
        'no_telp',
    ];
    protected $table = 'customers';

    public function Customer()
    {
        return $this->hasMany(Customer::class, 'id_customer', 'id');
    }
}
