<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    //mapping ke tabel
    protected $table = 'transaksi';
    //mapping ke kolom/fieldnya
    protected $fillable = ['id_transaksi', 'total_tiket', 'totalharga', 'penumpang_id', 'tiket_id','tanggal'];
}
