<?php




Route::group([
    'namespace' => 'Service',
], function() {

    Route::get('/risk_management','ServiceController@riskManagement')->name('service.risk_management');


    Route::get('/security_assessment','ServiceController@securityAssessment')->name('service.security_assessment');
    Route::get('/compliance_to_reguratory','ServiceController@complianceToReguratory')->name('service.compliance_to_reguratory');


    Route::get('/compliance_to_standard','ServiceController@complianceToStandard')->name('service.compliance_to_standard');

});