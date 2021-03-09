<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = 'materis';
    protected $fillable = [
        'id', 'kelas', 'name', 'mapel', 'judul', 'tgl_upload', 'tgl_deadline', 'deskripsi', 'file'
    ];
}
