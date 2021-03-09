<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
  protected $table = 'tugas';
    protected $fillable = [
        'id', 'nis', 'name', 'rombel', 'rayon', 'file_siswa', 'keterangan'
    ];
}
