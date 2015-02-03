<?php

class CategoriaController extends BaseController {

	protected $categoria;

	public function __construct(Categoria $categoria)
	{
		parent::__construct();
		$this->categoria = $categoria;
	}

	public function index()
	{
		$limit = 10;

		$data = [
			'title' => 'Categorias',
			'categorias' => $this->categoria->paginate($limit)
		];

		Breadcrumbs::set([
			URL::to("/categoria") => "Categorias",
			"#" => "Administrar"
		]);

		return $this->setView()->with($data);
	}

	/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
	public function show($id)
	{
		$data = [
			'title' => 'Categorias',
			'categoria' => $this->categoria->find($id)
		];

		Breadcrumbs::set([
			URL::to("/categoria") => "Categorias",
			"#" => "Visualizar"
		]);

		return $this->setView('show')->with($data);
	}

	public function create()
	{
		$data = [
			'title' => 'Categorias',
			'categoria' => $this->categoria,
			'categorias' => array(''=>'Selecione') + Categoria::lists('titulo', 'id')
		];

		Breadcrumbs::set([
			URL::to("/categoria") => "Categorias",
			"#" => "Cadastrar"
		]);

		return $this->setView()->with($data);
	}

	public function store()
	{
		$validator = Validator::make(Input::all(), $this->categoria->rules);
		
		if ($validator->fails()) 
		{
			return Redirect::to('categoria/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} 
		else 
		{
			
			$this->categoria->titulo = Input::get('titulo');
			
			if(trim(Input::get('categoria_pai')) != "")
				$this->categoria->categoria_pai = (int)  Input::get('categoria_pai');

			$this->categoria->save();

			// redirect
			Session::flash('message', 'Registro cadastrado com sucesso!');

			return Redirect::to('categoria');
		}
	}
}
