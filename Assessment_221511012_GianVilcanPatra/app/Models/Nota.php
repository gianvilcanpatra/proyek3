<?php

namespace App\Models;

use App\Models\Kasir;
use App\Models\Tenan;
use App\Models\Barang;
use App\Models\BarangNota;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nota extends Model
{
    protected $table = 'notas';
    protected $primaryKey = 'KodeNota';
    protected $fillable = ['KodeTenan', 'KodeKasir', 'TglNota', 'JamNota', 'JumlahBelanja', 'Diskon', 'Total'];

    public function barangNota()
    {
         return $this->hasMany(BarangNota::class);
    }

    public function Barang()
    {
         return $this->belongTo(Barang::class);
    }

    public function Kasir()
    {
         return $this->hasMany(Kasir::class);
    }

    public function Tenan()
    {
         return $this->hasMany(Tenan::class);
    }
}
