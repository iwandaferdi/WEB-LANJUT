<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = "guru";

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class, "guru_id");
    }
}
