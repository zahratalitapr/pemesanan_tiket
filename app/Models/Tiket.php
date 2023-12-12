<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    //mapping ke tabel
    protected $table = 'tiket';
    //mapping ke kolom/fieldnya
    protected $fillable = ['id_tiket', 'harga', 'jadwal_id', 'jenis_tiket_id', 'rute_id', 'armada_id'];

    public function armada(){
        return $this->hasMany(armada::class);
    }
}
