<?php




Route::group([
    'namespace' => 'Event',
], function() {

    Route::get('/index','EventController@index')->name('event.index');

});