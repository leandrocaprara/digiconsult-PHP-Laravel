<?php

namespace App\Http\Controllers;

use App\Especialidade;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Medico;

class MedicosController extends Controller
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
        $medicos = DB::table('medicos')
                        ->join('especialidades', 'medicos.especialidades_id', '=', 'especialidades.id')
                        ->select('medicos.*', 'especialidades.name as especialidades_name')
                        ->get();

        return view('medicos.index', ['medicos' => $medicos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialidades = Especialidade::all();
        return view('medicos.create', ['especialidades' => $especialidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medico = new Medico();
        $medico->name = request('name');
        $medico->email = request('email');
        $medico->cpf = request('cpf');
        $medico->crm = request('crm');
        $medico->endereco = request('endereco');
        $medico->cidade = request('cidade');
        $medico->estado = request('estado');
        $medico->bairro = request('bairro');
        $medico->numero = request('numero');
        $medico->cep = request('cep');
        $medico->especialidades_id = request('especialidades_id');
        $medico->save();
        
        return redirect('/medicos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medico = Medico::findOrFail($id);

        return view('medicos.show', ['medico' => $medico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medico = Medico::findOrFail($id);
        return view('medicos.edit', ['medico' => $medico]);
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
        $medico = Medico::findOrFail($id);
        $medico->name = request('name');
        $medico->email = request('email');
        $medico->cpf = request('cpf');
        $medico->crm = request('crm');
        $medico->endereco = request('endereco');
        $medico->cidade = request('cidade');
        $medico->estado = request('estado');
        $medico->bairro = request('bairro');
        $medico->numero = request('numero');
        $medico->cep = request('cep');
        $medico->planos_id = request('especialidades_id');
        $medico->update();
        
        return redirect('/medicos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medico = Medico::findOrFail($id);

        $medico->delete();

        return redirect('/medicos');
    }
}
