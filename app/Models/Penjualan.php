<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function barang() {
        return $this->belongsTo(Barang::class, 'id_barang');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_user')->withDefault(['name' => 'User Deleted']);
    }
}
