<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    public function homepage()
    {
        return view('welcome');
    }

    public function cadastrar()
    {
        echo 'Contruction page register';
        //return view('welcome');
    }


    /*
    ====================================
    =    method to use login VIEW      =
    ====================================
    */      
    public function fazerlogin()
    {
        
        return view('user.login');
    }



    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
