<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class InsertController extends Controller
{
   function insertRow(){
     $result=  DB::table('students')->insert(['name'=>'shilpe','class'=> '9','roll'=>'12']);
     if($result==true){
         return "insert success";
     }else{
         return "insert hoy nai";
     }

   }

   function insertMultiRow(){

    $result=  DB::table('students')->insertOrIgnore(
        [
            ['id'=>11,'name'=>'Rabeya','class'=> '10','roll'=>'22'],
            ['id'=>12,'name'=>'nurul','class'=> '11','roll'=>'14'],
            ['id'=>13,'name'=>'mika','class'=> '1','roll'=>'140'],
        ]


    );
    if($result==true){
        return "insert success";
    }else{
        return "insert hoy nai";
    }
   }
}
