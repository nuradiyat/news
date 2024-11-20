<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    // Sesuai dengan atribut di tabel
    protected $fillable = ['name'];


    // Relasi: Satu kategori memiliki banyak artikel
    public function article(): HasMany
    {
        // article seuai dengan model
        return $this->hasMany(Article::class);
    }
}
