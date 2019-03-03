<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kind extends Model
{
    use SoftDeletes;
    protected $fillable= ['Ten','Ten_KhongDau','ThuTu','AnHien', 'idTL'];
    public function Category()
    {
    	return $this->belongsTo('App\Category');
    }
}
