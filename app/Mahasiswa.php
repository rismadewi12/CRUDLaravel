<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table ='students';
    protected $fillable = ['Nama', 'Nim', 'id_prodi', 'Semester','Status'];
}