<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Paciente;
use App\Plano;

class PacientesController extends Controller
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
        $pacientes = DB::table('pacientes')
                        ->join('planos', 'pacientes.planos_id', '=', 'planos.id')
                        ->select('pacientes.*', 'planos.name as plano_name')
                        ->get();

        return view('pacientes.index', ['pacientes' => $pacientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planos = Plano::all();
        return view('pacientes.create', ['planos' => $planos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = new Paciente();
        $paciente->name = request('name');
        $paciente->email = request('email');
        $paciente->cpf = request('cpf');
        $paciente->endereco = request('endereco');
        $paciente->cidade = request('cidade');
        $paciente->estado = request('estado');
        $paciente->bairro = request('bairro');
        $paciente->numero = request('numero');
        $paciente->cep = request('cep');
        $paciente->planos_id = request('planos_id');
        $paciente->save();
        
        return redirect('/pacientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);

        return view('pacientes.show', ['paciente' => $paciente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        $plano = Plano::all();
        return view('pacientes.edit', ['paciente' => $paciente, 'planos' => $plano]);
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
        $paciente = Paciente::findOrFail($id);
        
        $paciente->name = request('name');
        $paciente->email = request('email');
        $paciente->cpf = request('cpf');
        $paciente->planos_id = request('planos_id');
        $paciente->endereco = request('endereco');
        $paciente->cidade = request('cidade');
        $paciente->estado = request('estado');
        $paciente->bairro = request('bairro');
        $paciente->numero = request('numero');
        $paciente->cep = request('cep');
        $paciente->update();
        
        return redirect('/pacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id);

        $paciente->delete();

        return redirect('/pacientes');
    }
}
