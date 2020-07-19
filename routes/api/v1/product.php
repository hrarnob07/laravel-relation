<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=> 'size'],function (){
    Route::get('/','Api\V1\Size\Index');
    Route::get('/{id}','Api\V1\Size\Show');
    Route::put('/','Api\V1\Size\Store');
    Route::patch('/{id}','Api\V1\Size\Update');
    Route::delete('/{id}','Api\V1\Size\Delete');
});

Route::group(['prefix'=> 'product'],function (){
    Route::get('/','Api\V1\Product\Index');
    Route::get('/{id}','Api\V1\Product\Show');
    Route::put('/','Api\V1\Product\Store');
    Route::patch('/{id}','Api\V1\Product\Update');
    Route::delete('/{id}','Api\V1\Product\Delete');
});
