<?php

use App\Http\Controllers\basicCurd;
use Illuminate\Support\Facades\Route;



Route::get('/',[basicCurd :: class,'onSelect']);

Route::post('/insertData',[basicCurd :: class,'onInsert']);
 Route::get('/insert',function(){
  return view('insert');
 });

 Route::post('/deleteData',[basicCurd :: class,'onDelete']);
 Route::get('/delete',function(){
    return view('delete');
   });

 Route::post('/updateData',[basicCurd :: class,'onUpdate']);
   Route::get('/update',function(){
    return view('update');
   });
