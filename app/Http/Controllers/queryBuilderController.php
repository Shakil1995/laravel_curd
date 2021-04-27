<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class queryBuilderController extends Controller
{
    function selectAllRows(){
 $result= DB::table('students')->get();
 return json_encode($result) ;
    }

    //Retriveing result QueryBuilder
    function selectSingleRows(){
        $result= DB::table('students')->where('name','=','aa')->first();
        return json_encode($result) ;
           }

           function selectFindRows(){
            $result= DB::table('students')->find(7);
            return json_encode($result) ;
               }

               function selectOneColumn(){
                $result= DB::table('students')->pluck('name');
                return json_encode($result) ;
                   }
                   function selectMuliColumn(){
                    $result= DB::table('students')->pluck('name','id');
                     return json_encode($result) ;
                       }

                       function specificData(){
                        $result= DB::table('students')->where('id','=','7')->value('name');
                         return json_encode($result) ;
                           }


}
