<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pergunta;
use App\Pilar;
use App\Resposta;
use App\Resultado;
use App\Teste;
use App\Lead;
use App\Curso;
use Carbon\Carbon;

class ResultadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->reflash();
        $teste_id = session()->get('teste_id');
        $lead_id = session()->get('lead_id');

        if (!session()->exists('teste_id')) {
            session()->flush();
            return redirect()->route('sair');
        }

        $resultados = Resultado::where('teste_id', $teste_id)->select('nota')->get();
        $piores = Resultado::join('pilares as p', 'p.id', '=', 'resultados.pilar_id')->where('teste_id', $teste_id)->select('resultados.pilar_id as pilar_id', 'p.pilar as pilar', 'resultados.nota as nota')->orderBy('nota', 'asc')->take(3)->get();


        foreach ($resultados as $r){
            $resultado[] = $r['nota'];
        }

        $resultado = json_encode($resultado);

        foreach ($piores as $pior){
            $cursos[$pior['pilar_id']] = Curso::where('pilar_id',$pior['pilar_id'])->get();
        }

        return view('resultado', compact('resultado', 'piores', 'cursos'))->with('lead_id', $lead_id);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
