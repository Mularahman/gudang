<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function log(){
        return $this->belongsToMany(Log::class, 'log_barangs')->withPivot('qty');
    }

    public function barangs()
    {
        return $this->hasMany(Barang::class);
    }
}
