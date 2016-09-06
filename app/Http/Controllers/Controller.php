<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

#=======================================
# Service Namespace  
use App\Http\Services\GoalsManagemen;
use App\Http\Services\IdentityManagement;


#==========================================
# Validations namespace
use App\Http\Validations\UserValidation;


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
    	$this->userValidation 		= new UserValidation;
    	$this->goalsManagemen 		= new GoalsManagemen;
    	$this->identityManagement 	= new IdentityManagement;
    }
}
