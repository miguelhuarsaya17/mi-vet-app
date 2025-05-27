<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function index_services(){
        return view('home#services');
    }
    public function index_about(){
        return view('home#about');
    }
    public function index_contact(){
        return view('home#contact');
    }
    //funciones que la mayoria me van a llevar a distintas vistas
    
    //crud
}
