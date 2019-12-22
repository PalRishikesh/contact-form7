<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'Rishi\Contact\Http\Controllers'], function () {
    Route::get('contact-form', 'ContactController@index')->name('contact-form');

    Route::post('contact', 'ContactController@send')->name('contact');
});
