<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $table = 'jawaban';

    public function soal(){
        return $this->belongsTo(Soal::class);
    }

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }
}
