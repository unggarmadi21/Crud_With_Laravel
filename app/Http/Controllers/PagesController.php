<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//controller pagescontroller
class PagesController extends Controller
{
    // method home
    public function home()
    {
        return view('index');
    }

    //method about
    public function about()
    {
        return view('about', ['nama' => 'Unggar Madi']);
    }
}
