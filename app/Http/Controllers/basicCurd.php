<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class basicCurd extends Controller
{
 function onSelect(){
  $jsonData=  DB::select('select * from students  where name=?',['amin']);
  $jsonString= json_encode($jsonData);
  $selectData= json_decode( $jsonString);
  return view('select',['selectKey'=> $selectData]);
 }
 function onInsert( Request $req){
  $name=   $req ->input('name');
  $class=   $req ->input('class');
  $roll=   $req ->input('roll');
 $result= DB::insert('INSERT INTO `students`( `name`, `class`, `roll`) VALUES (?,?,?)',[  $name,$class, $roll]);
if($result){
    return "success";
}else{
    return "false";
}

}

function onDelete(Request $req){
    $id=   $req ->input('id');
    $result=   DB::delete('DELETE FROM `students` WHERE `id`=?' ,[$id]);
    if($result){
        return "success";
    }else{
        return "false";
    }

}

function onUpdate(Request $req){

    $name=   $req ->input('name');
    $class=   $req ->input('class');
    $roll=   $req ->input('roll');
    $id=   $req ->input('id');
    $result=DB::update('UPDATE `students` SET `name`=?,`class`=?,`roll`=? WHERE `id`=?',[$name,$class,$roll,$id]);
    if($result){
        return "update success";
    }else{
        return " update false";
    }
}

}
