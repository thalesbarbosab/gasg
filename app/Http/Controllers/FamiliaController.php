<?php

namespace App\Http\Controllers;

use App\familia;
use App\pessoa;
use App\programa_social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $f = familia::all();
        return view('familia.index', compact('f'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $f = familia::all();
        $ps = programa_social::all();
        return view('familia.create', compact('f','ps'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $f = new familia();
        $f->estado = $request->estado;
        $f->cidade = $request->cidade;
        $f->bairro = $request->bairro;
        $f->cep = $request->cep;
        $f->logradouro = $request->logradouro;
        $f->num_logradouro = $request->num_logradouro;
        $f->id_programa = $request->id_programa;
        $f->save();
        $ultimoId = $f->id;
        return redirect('/familia/'.$ultimoId.'/edit')->with('success','Família inserida com sucesso, agora poderá definir as pessoas que a compõe');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $f = familia::find($id);
        $ps = programa_social::all();
        $pIn = pessoa::all()->whereIn('familia_id',$id);
        $pOut = pessoa::all()->where('familia_id',null);
        return view('familia.edit', compact('f','ps','pIn','pOut'));
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
        if($request->input('type') == 'familia')
        {
            $f = familia::find($id);
            $f->estado = $request->estado;
            $f->cidade = $request->cidade;
            $f->bairro = $request->bairro;
            $f->cep = $request->cep;
            $f->logradouro = $request->logradouro;
            $f->num_logradouro = $request->num_logradouro;
            $f->id_programa = $request->id_programa;
            $f->save();
            $ultimoId = $f->id;
            return redirect('/familia/'.$ultimoId.'/edit#pessoas')->with('success','Dados da família alterados com sucesso');
        };
        if($request->input('type') == 'pessoas')
        {
            $p = pessoa::find($request->id_pessoa);
            $p->familia_id = $id;
            $p->save();
            return redirect('/familia/'.$id.'/edit')->with('success','Pessoa da familia incluida com sucesso');
        };

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $f = familia::find($id);
        $f->delete();
        return back()->with('success','Familia removida com sucesso!');
    }

    public function peopleInFamily()
    {

        print_r(DB::select('
            select f.id, count(p.id) as "Total"
            from pessoas p
            Join familias f on f.id = p.familia_id
            group by(f.id)'));
            print('<br><a href="/familia"> Voltar </a>');

    }

    public function personInFamily($idF)
    {
        return pessoa::all()
        ->where('familia_id',$idF);
    }
}
