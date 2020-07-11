<?php

use Illuminate\Support\Facades\Route;

Route::post('/login','Api\V1\Auth\Login');
Route::post('/registration','Api\V1\Auth\Registration');


