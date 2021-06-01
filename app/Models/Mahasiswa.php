<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id', 'nama_mhs', 'NIM', 'telepon_mhs', 'pengalaman', 'jurusan_id', 'status_id', 'skill_id', 'jenis_kelamin',
        'tgl_lahir', 'foto_mhs'
    ];

    public function status(){
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function jurusan(){
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }

    public function skill(){
        return $this->belongsTo(Skill::class, 'skill_id');
    }
}
