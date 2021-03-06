<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postms extends Model
{
    protected $fillable = ['judul','category_id','content','gambar'];
    
    public function category(){
        return $this->belongsTo('App\category');
    }
}
