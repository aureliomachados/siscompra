<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Produto;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$produtos = Produto::paginate(2);

        return \View::make('cadastro.produtos.index')->with('produtos', $produtos);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('cadastro.produtos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProdutoRequest $request)
	{
        Produto::create($request->all());

        Flash::overlay("Produto adicionado!", 'Mensagem');

        return \Redirect::route('cadastro.produtos.index');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$produto = Produto::find($id);

        return \View::make('cadastro.produtos.show')->with('produto', $produto);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $produto = Produto::find($id);

        return view('cadastro.produtos.edit')->with('produto', $produto);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ProdutoRequest $request, $id)
	{
        $produto = Produto::find($id);

        $produto->update($request->all(), $id);


        Flash::warning('Produto atualizado.');

        return redirect()->route('cadastro.produtos.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        Produto::destroy($id);

        Flash::error('Produto removido!');

        return redirect()->route('cadastro.produtos.index');
	}

}
