<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ulasan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function buku() : BelongsTo
    {
        return $this->belongsTo(Buku::class);
    }
}
