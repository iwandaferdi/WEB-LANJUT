<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = "nilai";

    public function guru()
    {
        return $this->belongsTo(Guru::class, "nilai_id");
    }

    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, "kategori_nilai", "nilai_id", "kategori_id");
    }
}
