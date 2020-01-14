<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'InscricaoController@index')->name("land");

Route::resource('/ferramenta', 'FerramentaController', ['only' => [
    'index','store'
]]);

Route::resource('/resultado', 'ResultadoController', ['only' => [
    'index'
]]);

Route::get('redirect/{id}/{lead}', function ($id,$lead) {
    $curso = \App\Curso::find($id);
    $link = $curso['link'];

    $clicou = \App\Clique::where('lead_id', $lead)->where('curso_id', $id)->get();

    if(count($clicou)==0){
        $clique_id = \App\Clique::updateOrInsert([
            'lead_id' => $lead,
            'curso_id' => $id,
            'cliques' => 1
        ]);
    }else{
        $inc_clique = \App\Clique::where('lead_id', $lead)->where('curso_id', $id)->increment('cliques');
    }

//    $delete_clique = \App\Clique::where('id', $clique_id)->delete();

    return view('redirect', compact('link'));
});


Route::get('/sair', function () {
    session()->flush();
    return redirect()->route('land');
})->name("sair");