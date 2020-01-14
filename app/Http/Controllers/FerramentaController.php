<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pergunta;
use App\Pilar;
use App\Resposta;
use App\Resultado;
use App\Teste;
use App\Lead;
use Carbon\Carbon;

class FerramentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pilares = Pilar::select('pilares.id', 'pilares.pilar')->get();

        foreach ($pilares as $pilar){
           $perguntas_lista[$pilar['id']] = Pilar::find($pilar['id'])->perguntas;
        }

        return view('ferramenta', compact('pilares','perguntas_lista'));
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
//        return $request->all();

        $name = $request->input('name');

        $lead_count = Lead::where('email',$request->input('email'))->count();

        if($lead_count === 0){
            $lead_id = Lead::insertGetId(
                [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'origem' => 'definir',
                    'step' => 1,
                    'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
                ]
            );
            // Enviar e registrar email
        }else{

            $lead_id = Lead::where('email',$request->input('email'))->select('id')->get();

            $lead_id = $lead_id[0]['id'];

            $lead_update = Lead::where('id', $lead_id)
                ->update(
                    [
                        'step' => 1,
                        'updated_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
                    ]
                );
        }

        // Criar teste

        $teste_insert_id = Teste::insertGetId(
            [
                'lead_id' => $lead_id,
                'start' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s'),
                'end' => null,
                'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
            ]
        );



        $teste_id = $teste_insert_id;
        $lead_id = $lead_id;

        $espiritual = $request->get('espiritual');
        $familiar = $request->get('familiar');
        $saude = $request->get('saúde');
        $financeiro = $request->get('financeiro');
        $profissional = $request->get('profissional');
        $intelectual = $request->get('intelectual');
        $relacionamentos = $request->get('amor');
        $social = $request->get('social');

        $media[] = round((array_sum($familiar))/3);
        $media[] = round((array_sum($saude))/3);
        $media[] = round((array_sum($financeiro))/3);
        $media[] = round((array_sum($profissional))/3);
        $media[] = round((array_sum($intelectual))/3);
        $media[] = round((array_sum($relacionamentos))/3);
        $media[] = round((array_sum($social))/3);
        $media[] = round((array_sum($espiritual))/3);

        $cont = 1;

        for($i=0;$i<3;$i++){
            $resp_familiar = Resposta::insert(
                [
                    'teste_id' => $teste_id,
                    'pergunta_id' => $cont++,
                    'nota' => $familiar[$i],
                    'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
                ]
            );
        }

        for($i=0;$i<3;$i++){
            $resp_saude = Resposta::insert(
                [
                    'teste_id' => $teste_id,
                    'pergunta_id' => $cont++,
                    'nota' => $saude[$i],
                    'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
                ]
            );
        }

        for($i=0;$i<3;$i++){
            $resp_financeiro = Resposta::insert(
                [
                    'teste_id' => $teste_id,
                    'pergunta_id' => $cont++,
                    'nota' => $financeiro[$i],
                    'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
                ]
            );
        }

        for($i=0;$i<3;$i++){
            $resp_profissional = Resposta::insert(
                [
                    'teste_id' => $teste_id,
                    'pergunta_id' => $cont++,
                    'nota' => $profissional[$i],
                    'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
                ]
            );
        }

        for($i=0;$i<3;$i++){
            $resp_intelectual = Resposta::insert(
                [
                    'teste_id' => $teste_id,
                    'pergunta_id' => $cont++,
                    'nota' => $intelectual[$i],
                    'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
                ]
            );
        }

        for($i=0;$i<3;$i++){
            $resp_relacionamentos = Resposta::insert(
                [
                    'teste_id' => $teste_id,
                    'pergunta_id' => $cont++,
                    'nota' => $relacionamentos[$i],
                    'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
                ]
            );
        }

        for($i=0;$i<3;$i++){
            $resp_social = Resposta::insert(
                [
                    'teste_id' => $teste_id,
                    'pergunta_id' => $cont++,
                    'nota' => $social[$i],
                    'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
                ]
            );
        }


        for($i=0;$i<8;$i++){
            $resultados = Resultado::insert(
                [
                    'teste_id' => $teste_id,
                    'pilar_id' => $i+1,
                    'nota' => $media[$i],
                    'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
                ]
            );
        }


        for($i=0;$i<3;$i++){
            $resp_espiritual = Resposta::insert(
                [
                    'teste_id' => $teste_id,
                    'pergunta_id' => $cont++,
                    'nota' => $espiritual[$i],
                    'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
                ]
            );
        }


        $teste_update = Teste::where('id', $teste_id)
                            ->update(
                                [
                                    'end' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s'),
                                    'updated_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
                                ]
                            );

        $lead_update = Lead::where('id', $lead_id)
                            ->update(
                                [
                                    'step' => 2,
                                    'updated_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
                                ]
                            );


        return redirect()->route('resultado.index')->with('teste_id', $teste_insert_id)->with('lead_id', $lead_id);
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
