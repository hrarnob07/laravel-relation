<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=> 'category'],function (){
    Route::get('/','Api\V1\Category\Index');
    Route::get('/{id}','Api\V1\Category\Show');
    Route::put('/','Api\V1\Category\Store');
    Route::patch('/{id}','Api\V1\Category\Update');
    Route::delete('/{id}','Api\V1\Category\Delete');
});
