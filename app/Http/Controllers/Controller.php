<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
   
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function homepage()
    {
    	/*$variavel = "Homepage do Sistema de Monitoria";
		
		return view('welcome', [
			'title' => $variavel
		]);*/
		
		echo "Homepage ";
    }

    public function cadastrar()
    {
 	echo "Tela de Cadastro";
    }

/*
|--------------------------------------------------------------------------
| Method to user Login VIEW
|--------------------------------------------------------------------------
*/
    public function fazerlogin()
    {
        return view('user.login');
 	
    }
}



