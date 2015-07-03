<?php namespace App\Http\Controllers;

use App\Chamado;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\ChamadoRequest;
use Laracasts\Flash\Flash;

class ChamadoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('cadastro.chamados.index')->with('chamados', Chamado::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('cadastro.chamados.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ChamadoRequest $request)
	{
        $chamado = new Chamado();

        $chamado->descricao = $request->input('descricao');
        $chamado->status = $request->input('status');

        //Passa a data do formato local para o formato entendido pelo banco de dados.
        $chamado->dataAbertura = Carbon::createFromFormat('d/m/Y', $request->input('dataAbertura'));
        $chamado->dataFechamento = Carbon::createFromFormat('d/m/Y', $request->input('dataFechamento'));

        $chamado->save();

        Flash::message("Novo chamado adicionado!");

        return redirect()->route('cadastro.chamados.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
