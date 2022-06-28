<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Mahasiswa extends Model
{
    use HasFactory;
    use Sortable;


    protected $table = 'mahasiswa';

    protected $fillable=[
        'qr_code',
        'nim',
        'nama',
        'prodi',
        'absen1',
        'absen2',
        'absen3',
    ];

    public $sortable =[
        'nim',
        'nama',
        'prodi'
    ];
}
