<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
 
    protected $fillable= ['TenTL','TenTL_KhongDau','ThuTu','AnHien'];
    public function kinds()
    {
    	return $this->hasMany('App\Kind','idTL', 'id');
    }
}
