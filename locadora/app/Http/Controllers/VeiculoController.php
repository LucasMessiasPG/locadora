<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Cor;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Veiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VeiculoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $veiculos = DB::table('veiculo')
            ->select('modelo.nome as nome_modelo','cor.nome as nome_cor','placa','ano_fabricacao','placa','ano_modelo','id_veiculo')
            ->join('modelo', 'veiculo.id_modelo', '=', 'modelo.id_modelo')
            ->join('cor','veiculo.id_cor', '=', 'cor.id_cor')
            ->get();

		return view('veiculo.listar', compact('veiculos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $coresdb = Cor::all();
        $cores =[];
        foreach ($coresdb as $cor) {
            $cores[$cor->id_cor] = $cor->nome;
        }
        if(count($cores)<1)
            $cores[0] = 'Cadastre uma nova Cor';

        $modelosdb = Modelo::all();
        $modelos = [];

        foreach ($modelosdb as $modelo) {

            $marca = Marca::where('id_marca','=',$modelo->id_marca)->first();

            $modelos[$modelo->id_modelo] = $marca->nome.' - '.$modelo->nome;
        }

        if(count($modelos)<1)
            $modelos[0] = 'Cadastre um novo Modelo';


        return view('veiculo.create',compact('cores','modelos'));
	}

    public function store()
    {
        $post = \Request::all();
        //dd($post);
        Veiculo::create([
            'id_modelo' => $post['modelo'],
            'id_cor' => $post['cor'],
            'placa' => $post['placa'],
            'ano_fabricacao' => $post['ano_fabricacao'],
            'ano_modelo' => $post['ano_modelo'],
        ]);
        return redirect()->route('veiculo.create')->with('message','Veiculo cadastrada com sucesso');
    }






    public function createMarca()
    {

        return view('veiculo.createMarca',compact('marca'));
    }

    public function storeMarca()
    {
        $post = \Request::only('marca');
        Marca::create(['nome' => $post['marca']]);
        return redirect()->route('veiculo.createModelo')->with('message','Marca cadastrada com sucesso');

    }







    public function createModelo()
    {
        $marcasdb = Marca::all();

        $marcas = [];
        foreach ($marcasdb as $marca) {
            $marcas[$marca->id_marca] = $marca->nome;
        }
        if(count($marcas)<1)
            $marcas[0] = 'Cadastre uma nova Marca';
        return view('veiculo.createModelo',compact('marcas'));
    }

    public function storeModelo()
    {
        $post = \Request::only('modelo','marca');
        Modelo::create([
            'nome' => $post['modelo'],
            'id_marca' => $post['marca']
        ]);
        return redirect()->route('veiculo.create')->with('message','Modelo cadastrada com sucesso');
    }






    public function createCor()
    {
        return view('veiculo.createCor');
    }


    public function storeCor()
    {
        $post = \Request::only('cor');
        Cor::create(['nome' => $post['cor']]);
        return redirect()->route('veiculo.create')->with('message','Cor cadastrada com sucesso');

    }









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
