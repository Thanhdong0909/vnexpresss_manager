<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Kind extends Model
{
    protected $fillable= ['Ten','Ten_KhongDau','ThuTu','AnHien', 'idTL'];
    public function Category()
    {
    	return $this->belongsTo('App\Category', 'idTL', 'id');
    }
}
