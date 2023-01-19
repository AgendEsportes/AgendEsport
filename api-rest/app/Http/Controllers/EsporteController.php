<?php

namespace App\Http\Controllers;

use App\Models\Esporte;
use Illuminate\Http\Request;

class EsporteController extends Controller
{
    public function __construct(Esporte $esporte) {
       $this->esporte = $esporte; 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$esportes = Esporte::all();
        $esportes = $this->esporte->all();
        return $esportes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$esporte = Esporte::create($request->all());
        //dd($esporte);
        $esporte = $this->esporte->create($request->all());
        return $esporte;
    }

    /**
     * Display the specified resource.
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $esporte = $this->esporte->find($id);
        if($esporte === null) {
            return ['erro' => 'Recurso Indisponível'];
        }
        return $esporte;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Esporte  $espaco
     * @return \Illuminate\Http\Response
     */
    public function edit(Esporte $esporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $esporte = $this->esporte->find($id);

        if($esporte === null) {
            return ['erro' => 'Não foi possível realizar a atualização. Recurso indisponível'];
        }

        $esporte->update($request->all());
        return $esporte;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $esporte = $this->esporte->find($id);

        if($esporte === null) {
            return ['erro' => 'Não foi possível realizar a atualização. Recurso indisponível'];
        }

        $esporte->delete();
        return ['msg' => 'O esporte foi removido com sucesso!'];
    }
}
