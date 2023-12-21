<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $guarded=["id"];

    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class, 'mahasiswa_id', 'mahasiswa_id');
    }
}
