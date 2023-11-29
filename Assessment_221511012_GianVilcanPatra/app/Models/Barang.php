<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';
    protected $primaryKey = 'KodeBarang';
    protected $fillable = ['NamaBarang', 'Satuan', 'HargaSatuan', 'Stok'];

//     public function barangNota()
// {
//     return $this->hasMany(BarangNota::class, 'KodeBarang', 'KodeBarang');
// }
}
