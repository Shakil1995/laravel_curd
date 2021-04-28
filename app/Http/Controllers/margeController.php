<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class margeController extends Controller
{
  function mergeData(){
      $students=DB::table('students')->get();
      $examMark=DB::table('exma_mark')->get();

     $totalData= $students->merge($examMark);
     return $totalData;
  }
}
