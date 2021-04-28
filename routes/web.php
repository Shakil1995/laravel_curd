<?php

use App\Http\Controllers\basicCurd;
use App\Http\Controllers\queryBuilderController;
use App\Http\Controllers\AggregatesController;
use App\Http\Controllers\selectController;
use App\Http\Controllers\margeController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\InsertController;
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
//select Controller
Route::get('/UniqueSelect',[selectController :: class,'UniqueSelect']);
Route::get('/SingleColumnSelect',[selectController :: class,'SingleColumnSelect']);
Route::get('/multiColumnSelect',[selectController :: class,'multiColumnSelect']);

//merge Controller
Route::get('/merge',[margeController :: class,'mergeData']);

//Join Controller
Route::get('/leftJoin',[JoinController :: class,'LeftJoinData']);
Route::get('/rightJoin',[JoinController :: class,'RightJoinData']);

//Insert Controller
Route::get('/insertRow',[InsertController :: class,'insertRow']);
Route::get('/insertMultiRow',[InsertController :: class,'insertMultiRow']);

