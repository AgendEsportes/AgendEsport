<?php

namespace App\Http\Controllers;

use App\Models\Esporte;
use Illuminate\Http\Request;

class EsporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $esportes = Esporte::all();
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
        $esporte = Esporte::create($request->all());
        dd($esporte);
        return $esporte;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Esporte  $espaco
     * @return \Illuminate\Http\Response
     */
    public function show(Esporte $esporte)
    {
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
     * @param  \App\Models\Esporte  $espaco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Esporte $esporte)
    {
        /*
        print_r($request->all()); //dados atualizados
        echo '<hr>';
        print_r($esporte->getAttributes()); //dados antigos
        */
        $esporte->update($request->all());
        return $esporte;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Esporte  $espaco
     * @return \Illuminate\Http\Response
     */
    public function destroy(Esporte $esporte)
    {
        $esporte->delete();
        return ['msg' => 'O esporte foi removido com sucesso!'];
    }
}
