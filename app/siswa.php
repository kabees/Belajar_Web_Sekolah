<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
	public $timestamps = false;
    protected $table ='siswa';
    protected $fillable = ['nama_depan','nama_belakang','tanggal_lahir','tempat_lahir','jenis_kelamin','agama','alamat','no_hp','aksi'];
}



