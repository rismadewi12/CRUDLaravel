<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =['Nama', 'Nim', 'id_prodi', 'Semester','Status'];
}
