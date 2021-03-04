<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = 'materis';
    protected $fillable = [
        'id', 'kelas', 'name', 'judul', 'deskripsi', 'file'
    ];
}
