<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function scopeFilter($query, $search){
        if($search ?? false){
            return $query->where('kode_barang', 'like', '%' . $search .'%')->OrWhere('nama_barang'  , 'like', '%' . $search .'%');
        }
    }
}
