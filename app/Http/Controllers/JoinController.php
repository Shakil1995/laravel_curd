<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class JoinController extends Controller
{
    function LeftJoinData(){
       $result =DB::table('students')->leftJoin('exma_mark','students.class','=','exma_mark.class')->get();
       return      $result;
    }
    function RightJoinData(){
        $result =DB::table('students')->rightJoin('exma_mark','students.class','=','exma_mark.class')->get();
        return      $result;

    }
}
