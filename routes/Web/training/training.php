<?php




Route::group([
    'namespace' => 'Training',
], function() {

    Route::get('/training/general_awareness','TrainingController@generalAwareness')->name('training.general_awareness');
    Route::get('/training/security_governance','TrainingController@securityGovernance')->name('training.security_governance');


});