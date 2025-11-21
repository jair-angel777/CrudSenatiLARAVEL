<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
class CursosControler extends Controller
{
    public function index(): View {
        $cursos = DB::select("SELECT *  FROM cursos");
        return view("curso", [   "cursos"=> $cursos ]);
    }
}