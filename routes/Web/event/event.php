<?php




Route::group([
    'namespace' => 'Event',
], function() {

    Route::get('/index','EventController@index')->name('event.index');
    Route::get('/show','EventController@show')->name('event.show');


});