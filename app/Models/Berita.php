<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = "berita";

    public function berita()
    {
        return $this->belongsTo(berita::class, "berita_id");
    }

    public function kategori()
    {
        return $this->belongsToMany(kategori::class, "kategori_id", "berita_id", "kategori_id");
    }
}
