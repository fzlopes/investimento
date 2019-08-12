<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
        $title = 'Homepage do sistema de gestão para grupos de investimento';

        return view('welcome')->with(compact('title'));
    }

    public function cadastrar()
    {

    }

    public function fazerLogin()
    {
        return view('user.login');
    }
}
