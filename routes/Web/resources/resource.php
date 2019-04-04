<?php




Route::group([
    'namespace' => 'Resource',
], function() {

    Route::get('/contact_us','ResourceController@contactUs')->name('resource.contact_us');


    Route::get('/about_us','ResourceController@aboutUs')->name('resource.about_us');

});