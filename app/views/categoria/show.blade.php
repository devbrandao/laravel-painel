@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Visualizar
                	<span class="tools pull-right">
                    	<a href="javascript:;" class="fa fa-plus"></a>
                    	<a href="javascript:;" class="fa fa-times"></a>
                 	</span>
                </header>
                <div class="panel-body">
                    @if (!empty($categoria))
                        <table class="table  table-hover table-striped">
                            <thead>
                                <tr>
                                    <th class="col-sm-2"></th>
                                    <th class="col-sm-6"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-right"><strong>#ID</strong></td>
                                    <td>{{ $categoria->id }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Título</strong></td>
                                    <td>{{ $categoria->titulo }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Categoria Superior</strong></td>
                                    <td>{{ (!is_null($categoria->parent) ? "<a href=\"/categoria/view/{$categoria->parent->id}\">{$categoria->parent->titulo}</a>" : "---") }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Capa</strong></td>
                                    <td>{{ $categoria->capa }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Observação</strong></td>
                                    <td>{{ $categoria->observacao }}</td>
                                </tr>
                            </tbody>
                        </table>
                    @else
                        <p>Não existe dados.</p>
                    @endif
                </div>
            </section>
        </div>
    </div>
@stop