<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutoCompleteController extends Controller
{
    function index()
    {
     return view('autocomplete');
    }

    function paciente(Request $request)
    {
        if($request->get('query')){
            $query = $request->get('query');
            $data = DB::table('paciente')
                        ->where('name', 'LIKE', "%{$query}%")
                        ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      
            foreach($data as $row)
            {
                $output .= '<li><a href="#">'.$row->name.'</a></li>';
            }
            $output .= '</ul>';
            echo $output;
        }
    }

    function medico(Request $request)
    {
        if($request->get('query')){
            $query = $request->get('query');
            $data = DB::table('medico')
                        ->where('name', 'LIKE', "%{$query}%")
                        ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      
            foreach($data as $row)
            {
                $output .= '<li><a href="#">'.$row->name.'</a></li>';
            }
            $output .= '</ul>';
            echo $output;
        }
    }
}