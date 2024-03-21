<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Buku extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // public function KategoriRelasi(): HasMany
    // {
    //     return $this->hasMany(KategoriRelasi::class);
    // }
    public function kategori(): BelongsToMany
    {
        return $this->belongsToMany(Kategori::class, 'kategori_relasis');
    }
    public function koleksi(): HasMany
    {
        return $this->hasMany(Koleksi::class);
    }
    public function ulasan(): HasMany
    {
        return $this->hasMany(Ulasan::class);
    }
    public function peminjaman(): HasMany
    {
        return $this->hasMany(Peminjaman::class);
    }
}
