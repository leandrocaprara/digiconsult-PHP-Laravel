<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Consulta;
use App\Medico;
use App\Paciente;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $consulta = DB::table('consultas')
                        ->join('consultas', 'consultas.consultas_id', '=', 'consultas.id')
                        ->join('medicos', 'consultas.medicos_id', '=', 'medicos.id')
                        ->get();

        return view('consultas.index', ['consultas' => $consulta]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consulta = Consulta::all();
        return view('consultas.create', ['consultas' => $consulta]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consulta = new Consulta();
        $consulta->medico_id = request('medicos_id');
        $consulta->paciente_id = request('pacientes_id');
        $consulta->data = request('data');
        $consulta->consulta = request('consulta');
        $consulta->diagnostico = request('diagnostico');
        $consulta->receita = request('receita');
        $consulta->save();
        
        return redirect('/consultas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consulta = Consulta::findOrFail($id);

        return view('consultas.show', ['consultas' => $consulta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = Consulta::findOrFail($id);

        return view('consultas.edit', ['consultas' => $consulta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $consulta = Consulta::findOrFail($id);

        $consulta->medico_id = request('medicos_id');
        $consulta->paciente_id = request('pacientes_id');
        $consulta->data = request('data');
        $consulta->consulta = request('consulta');
        $consulta->diagnostico = request('diagnostico');
        $consulta->receita = request('receita');
        $consulta->update();
        
        return redirect('/consultas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consulta = Consulta::findOrFail($id);

        $consulta->delete();

        return redirect('/consultas');
    }
}
