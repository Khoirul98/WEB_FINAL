<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pesans extends Model
{
    use SoftDeletes;
    protected $fillable = ['Nama','Kode','Bebek1','Jumlah1','Bebek2','Jumlah2','Minum1','Banyak1','Minum2','Banyak2','Bebek3','Jumlah3','Minum3','Banyak3'];
}
