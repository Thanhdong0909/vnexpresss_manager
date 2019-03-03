<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $fillable= ['TenTL','TenTL_KhongDau','ThuTu','AnHien'];
    public function kinds()
    {
    	return $this->hasMany('App\Kind');
    }
}
