<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /*
    public function index(){
        return view('welcome');
    }*/

    //Une seule methode dans la class et plus besoin de specifier la methode dans web.php    public function __invoke()
    public function __invoke(){
        return view('index', ['name' => 'Mr TCHOUNGA']);
    }
}
