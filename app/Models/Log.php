<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategoris(){
        return $this->belongsToMany(Kategori::class,'log_barangs')->withPivot('qty');
    }
    public function barangs(){
        return $this->hasMany(Barang::class);
    }

}
