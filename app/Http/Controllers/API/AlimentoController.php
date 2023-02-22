<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Alimento as Alimento;
use App\Http\Resources\Alimento as AlimentoResource;
use Illuminate\Http\Request;

class AlimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alimentos = Alimento::paginate(15);
        return AlimentoResource::collection($alimentos);
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
        $alimento = new Alimento;
        $alimento->titulo = $request->input('titulo');
        $alimento->conteudo = $request->input('conteudo');

        if( $alimento->save() ){
        return new AlimentoResource( $alimento );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alimento = Alimento::findOrFail( $id );
        return new AlimentoResource( $alimento );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $alimento = Alimento::findOrFail( $request->id );
        $alimento->titulo = $request->input('titulo');
        $alimento->conteudo = $request->input('conteudo');

        if( $alimento->save() ){
        return new AlimentoResource( $alimento );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alimento = Alimento::findOrFail( $id );
        if( $alimento->delete() ){
          return new AlimentoResource( $alimento );
        }
    }
}
