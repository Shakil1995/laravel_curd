<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UpdateController extends Controller
{
    function onUpdate(){
        $result=  DB::table('students')->where('id',10)->update(['name'=>'mika']);

        if($result==true){
            return "update success";
        }else{
            return "update fail";
        }

      }
}
