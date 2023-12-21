<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $guarded=["id"];

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'pendaftaran_id', 'pendaftaran_id');
    }
}
