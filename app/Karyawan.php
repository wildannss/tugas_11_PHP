<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table='tbl_karyawan';
    protected $fillable=['nama','jabatan','umur','alamat','foto'];
    public $timestamps =false;
}
