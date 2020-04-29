<?php

namespace App\Controllers;

class Usuario extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        echo "login";
    }

    //--------------------------------------------------------------------

}
