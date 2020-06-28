<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plano;

class PlanosController extends Controller
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
        $planos = Plano::all();

        return view('planos.index', ['planos' => $planos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plano = new Plano();

        $plano->name = request('name');
        $plano->save();
        
        return redirect('/planos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plano = Plano::findOrFail($id);

        return view('planos.show', ['plano' => $plano]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plano = Plano::findOrFail($id);
        return view('planos.edit', ['plano' => $plano]);
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
        $plano = Plano::findOrFail($id);

        $plano->name = request('name');
        $plano->update();
        
        return redirect('/planos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plano = Plano::findOrFail($id);

        $plano->delete();
        
        return redirect('/planos');
    }
}
