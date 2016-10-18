<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

#=======================================
# Service Namespace  
use App\Http\Services\Payment;
use App\Http\Services\GoalsManagement;
use App\Http\Services\FlutterwaveService;
use App\Http\Services\IdentityManagement;
use App\Http\Services\TransactionManagement;


#==========================================
# Validations namespace
use App\Http\Validations\UserValidation;
use App\Http\Validations\PaymentValidation;
use App\Http\Validations\TransactionValidation;
use App\Http\Validations\GoalsManagementValidation;


#============================================
# Illuminate namespace 
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function __construct()
    {
        $this->userValidation 			= new UserValidation;
        $this->paymentValidation 		= new PaymentValidation;
        $this->goalsManagementValidation    = new GoalsManagementValidation;
        $this->transactionValidation 	= new TransactionValidation;

        $this->payment 		       = new Payment;
        $this->flutterwave         = new FlutterwaveService;
        $this->goalsManagement     = new GoalsManagement;
        $this->identityManagement       = new IdentityManagement;
        $this->transactionManagement    = new TransactionManagement;
    }
}
