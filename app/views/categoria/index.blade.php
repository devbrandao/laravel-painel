@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Administrar
                	<span class="tools pull-right">
                    	<a href="{{ URL::to("/categoria/create"); }}" class="fa fa-plus"> Cadastrar</a>
                 	</span>
                </header>
                <div class="panel-body">
                    <table class="table  table-hover general-table">
                        <thead>
	                        <tr>
	                            <th class="text-center">ID</th>
	                            <th class="text-center">Título</th>
	                            <th class="text-center">Categoria Superior</th>
	                            <th class="text-center" style="width: 150px;"></th>
	                        </tr>
                        </thead>
                        <tbody>
                        	@foreach($categorias as $cat)
		                        <tr>
		                            <td class="text-center">{{ $cat->id }}</td>
		                            <td class="text-center">{{ $cat->titulo }}</td>
		                            <td class="text-center">{{ (!is_null($cat->parent) ? "<a href=\"/categoria/show/{$cat->parent->id}\">{$cat->parent->titulo}</a>" : "---") }}</td>
		                            <td>
		                                <a href="{{ URL::to("/categoria/show/{$cat->id}"); }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>

                                        <a href="{{ URL::to("/categoria/edit/{$cat->id}"); }}" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>

                                        <a href="{{ URL::to("/categoria/delete/{$cat->id}"); }}" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
		                            </td>
		                        </tr>
                        	@endforeach
                        </tbody>

                    </table>
                    <div class="col-sm-6">
                    	{{ $categorias->links() }}
                    </div>
                </div>
            </section>
        </div>
    </div>
@stop