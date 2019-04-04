<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //

    public function riskManagement()
    {
        return view('services.risk_management');
    }

    public function securityAssessment()
    {
     return view('services.security_assessment');
    }

    public function complianceToStandard()
    {
        return view('services.compliance_to_standard');
    }

    public function complianceToReguratory()
    {
        return view('services.compliance_to_reguratory');
    }

}
