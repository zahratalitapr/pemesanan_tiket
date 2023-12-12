<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penumpang extends Model
{
    use HasFactory;

    protected $table = 'penumpang';
    protected $fillable = [
        'nama','gender','no_telepon','berat_bawaan','password','foto'
    ];
    public $timestamps = false;

    public function penumpang(){
        return $this->hasmany(Penumpang::class);
    }
}
