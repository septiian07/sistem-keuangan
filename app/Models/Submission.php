<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $table = 'submissions';
    protected  $primaryKey = 'id_pengajuan';
    public $incrementing = false;
    protected $fillable = [
        'id_pengajuan',
        'judul',
        'tgl_pengajuan',
        'status'
    ];
}
