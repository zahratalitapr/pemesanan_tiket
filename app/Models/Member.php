<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'member';
    protected $fillable = [
        'id','nama','email','password','role','foto'
    ];

    public function tiket (){
        return $this->hasMany(Tiket::class);
    }
    public function armada (){
        return $this->hasMany(Armada::class);
    }
}