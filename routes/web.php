<?php

use App\Http\Controllers\basicCurd;
use App\Http\Controllers\queryBuilderController;
use App\Http\Controllers\AggregatesController;
use Illuminate\Support\Facades\Route;



//  Route::get('/',[basicCurd :: class,'onSelect']);

// Route::post('/insertData',[basicCurd :: class,'onInsert']);
//  Route::get('/insert',function(){
//   return view('insert');
//  });

//  Route::post('/deleteData',[basicCurd :: class,'onDelete']);
//  Route::get('/delete',function(){
//     return view('delete');
//    });

//  Route::post('/updateData',[basicCurd :: class,'onUpdate']);
//    Route::get('/update',function(){
//     return view('update');
//    });

  //Retriveing result QueryBuilder
   Route::get('/',[queryBuilderController :: class,'selectAllRows']);
   Route::get('/singleRow',[queryBuilderController :: class,'selectSingleRows']);
   Route::get('/findRow',[queryBuilderController :: class,'selectFindRows']);
   Route::get('/oneColumn',[queryBuilderController :: class,'selectOneColumn']);
   Route::get('/multiColumn',[queryBuilderController :: class,'selectMuliColumn']);
   Route::get('/specificData',[queryBuilderController :: class,'specificData']);

// AggregatesController
Route::get('/rowCount',[AggregatesController :: class,'countRow']);
Route::get('/maxRow',[AggregatesController :: class,'maxRow']);
Route::get('/minRow',[AggregatesController :: class,'minRow']);
Route::get('/avgRow',[AggregatesController :: class,'avgRow']);
