<?php

namespace App\Http\Controllers\Training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    //
    public function generalAwareness()
    {
        return view('training.general_awareness');
    }

    public function securityGovernance()
    {
        return view('training.security_governance');
    }
}
