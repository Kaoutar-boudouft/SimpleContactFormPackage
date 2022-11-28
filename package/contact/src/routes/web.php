<?php

use Illuminate\Support\Facades\Route;
Route::group(['namespace'=>'Bitfumes\Contact\Http\Controllers'],function (){
    Route::get('contact','ContactController@index')->name("contact");
    Route::post('send','ContactController@send')->name("send");
});
