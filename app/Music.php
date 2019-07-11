<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $table = 'cd_music';
    protected $fillable = ['judul_lagu','genre','copyright','pencipta','stok'];
}
