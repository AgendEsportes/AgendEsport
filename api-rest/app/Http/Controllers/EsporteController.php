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
        return response()->json($esportes, 200);
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
        $regras = [
            'nome' => 'required|unique:esportes',
            'imagem' => 'required'
        ];

        $feedback = [
            'required' => 'O campo :attribute é obrigatório',
            'nome.unique' => 'O nome do esporte já existe'
        ];

        $request-> validate($regras, $feedback);

        $esporte = $this->esporte->create($request->all());
        return response()->json($esporte, 201);
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
            return response()->json(['erro' => 'Recurso Indisponível'], 404 );
        }
        return response()->json($esporte, 200);
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
            return response()->json (['erro' => 'Não foi possível realizar a atualização. Recurso indisponível'], 404);
        }

        $esporte->update($request->all());
        return response()->json($esporte, 200);
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
            return response()->json (['erro' => 'Não foi possível realizar a atualização. Recurso indisponível'], 404);
        }

        $esporte->delete();
        return response()->json(['msg' => 'O esporte foi removido com sucesso!'], 200);
    }
}
