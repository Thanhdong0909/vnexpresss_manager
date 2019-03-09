<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kind;

class AjaxController extends Controller
{
    // nhan id tu js, xu ly de tra du lieu ve
    public function getAjax($id)
    {

    	$listKind = Kind::where('idTL',$id)->get();// get ve 1 collection
    	foreach ($listKind as $key => $value) {
 				echo "<option value='".$value->id."'>".$value->Ten."</option>";
    	}
  
    }
}
