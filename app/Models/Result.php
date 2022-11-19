<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    protected $table = 'result';

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, 'id', 'mahasiswa_id');
    }

    public function jawaban(){
        return $this->hasMany(Jawaban::class, 'mahasiswa_id', 'mahasiswa_id');
    }
}
