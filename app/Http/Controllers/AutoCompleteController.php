<?php

namespace App\Http\Controllers;

use App\Medico;
use App\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutoCompleteController extends Controller
{
    function index()
    {
     return view('autocomplete');
    }

    function medico(Request $request)
    {
        $medicos = Medico::all();
        return json_encode($medicos);
    }

    function paciente(Request $request)
    {
        $pacientes = Paciente::all();
        return json_encode($pacientes);
    }
}