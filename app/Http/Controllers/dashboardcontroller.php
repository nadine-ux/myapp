<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\pos;
use App\Models\probleme;

class dashboardcontroller extends Controller
{
    public function index()
    {

        $pos = pos::count();
        $problemes = probleme::where('Etat','0')->count();
        $problemesno = probleme::where('Etat','1')->count();
        //$users = user::where('role','LIKE','%'.'animateur'.'%')->count();
        return view('dashboard', compact('pos','problemes','problemesno'));
    }
}