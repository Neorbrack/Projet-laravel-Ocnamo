<?php

namespace App\Http\Controllers;

use App\Models\accueil;
use App\Models\Reservation;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }
    
    public function contact()
    {
        return view('contact');
    }

    public function menu()
    {
        return view('menu');
    }

    public function reservation()
    {
        return view('reservation');
    }
}






