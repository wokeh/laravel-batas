<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $batas    = new \DateTime('2023-02-01');
        $sekarang = new \DateTime('now');

        $data = [];

        if ($sekarang > $batas){
            $data['udahLewat'] = true;
        } else {
            $data['udahLewat'] = false;
        }

        return view('welcome', $data);
    }
}
