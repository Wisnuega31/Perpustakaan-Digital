<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KategoriRelasi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Buku(): BelongsTo
    {
        return $this->belongsTo(Buku::class);
    }
    public function Kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }
}
