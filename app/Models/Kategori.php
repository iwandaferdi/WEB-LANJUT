<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "kategori";

    public function nilai()
    {
        return $this->belongsToMany(Nilai::class, "kategori_nilai", "kategori_id", "nilai_id");
    }
}
