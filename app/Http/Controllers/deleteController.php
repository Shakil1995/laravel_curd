<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class deleteController extends Controller
{
    function onDelete(){
        $result=  DB::table('students')->where('name','=','mika')->delete();
        // $result=  DB::table('students')->delete(); table all data delete without reset id data
        // $result=  DB::table('students')->truncate(); table all data delete with reset id data
        if($result==true){
            return "delete success";
        }else{
            return "delete fail";
        }

      }
}
