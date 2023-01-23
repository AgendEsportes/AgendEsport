<?php

namespace App\Http\Controllers;

use App\Models\Espaco;
use Illuminate\Http\Request;
use App\Repositories\EspacoRepository;

class EspacoController extends Controller
{
    public function __construct(Espaco $espaco) {
        $this->espaco = $espaco; 
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $espacoRepository = new EspacoRepository($this->espaco);

        if($request->has('atributos_esporte')) {
            $atributos_esporte = 'esporte:id,'.$request->atributos_esporte;
            $espacoRepository->selectAtributosRegistrosRelacionados($atributos_esporte);
        } else {
            $espacoRepository->selectAtributosRegistrosRelacionados('esporte');
        }

        if($request->has('filtro')) {
            $esporteRepository->filtro($request->filtro);
        }

        if($request->has('atributos')) {
            $esporteRepository->selectAtributos($request->atributos);
        } 

        return response()->json($esporteRepository->getResultado(), 200);
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
        $request->validate($this->espaco->rules());

        $espaco = $this->espaco->create([
            'esporte_id' => $request->esporte_id,
            'disponivel' => $request->disponivel,
        ]);

        return response()->json($espaco, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Espaco  $espaco
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $espaco = $this->espaco->with('esporte')->find($id);
        if($espaco === null) {
            return response()->json(['erro' => 'Recurso pesquisado não existe'], 404) ;
        } 

        return response()->json($espaco, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Espaco  $espaco
     * @return \Illuminate\Http\Response
     */
    public function edit(Espaco $espaco)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Espaco  $espaco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $espaco = $this->espaco->find($id);

        if($espaco === null) {
            return response()->json(['erro' => 'Impossível realizar a atualização. O recurso solicitado não existe'], 404);
        }

        if($request->method() === 'PATCH') {

            $regrasDinamicas = array();

            //percorrendo todas as regras definidas no Model
            foreach($espaco->rules() as $input => $regra) {
                
                //coletar apenas as regras aplicáveis aos parâmetros parciais da requisição PATCH
                if(array_key_exists($input, $request->all())) {
                    $regrasDinamicas[$input] = $regra;
                }
            }
            
            $request->validate($regrasDinamicas);

        } else {
            $request->validate($espaco->rules());
        }
        
        $espaco->fill($request->all());
        $espaco->save();
        
        return response()->json($espaco, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Espaco  $espaco
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $espaco = $this->espaco->find($id);

        if($espaco === null) {
            return response()->json(['erro' => 'Impossível realizar a exclusão. O recurso solicitado não existe'], 404);
        }

        $espaco->delete();
        return response()->json(['msg' => 'O espaço foi removido com sucesso!'], 200);
    }
}
