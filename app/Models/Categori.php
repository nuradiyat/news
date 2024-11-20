<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categori extends Model
{
    // Sesuai dengan atribut di tabel
    protected $fillable = ['name'];

    // Relasi: Satu kategori memiliki banyak artikel
    public function article(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
