<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=> 'branch'],function (){
    Route::get('/','Api\V1\Branch\Index');
    Route::get('/{id}','Api\V1\Branch\Show');
    Route::put('/','Api\V1\Branch\Store');
    Route::patch('/{id}','Api\V1\Branch\Update');
    Route::delete('/{id}','Api\V1\Branch\Delete');
    Route::put('/association','Api\V1\Branch\Association');
});
