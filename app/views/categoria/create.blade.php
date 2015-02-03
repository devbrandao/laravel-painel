@extends('layouts.default')

@section('title', $title)

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Administrar
                	<span class="tools pull-right">
                    	<a href="{{ URL::to("/categoria/create"); }}" class="fa fa-outdent"> Administrar</a>
                 	</span>
                </header>
                <div class="panel-body">

                    {{ Form::model($categoria, array('url' => '/categoria/store', 'class'=>'form-horizontal adminex-form', $categoria->id)) }}

                        <div class="form-group">
                            {{ Form::label('titulo', 'Título', array('class'=>'col-sm-2 control-label')) }}
                            <div class="col-sm-8">
                                {{ Form::text('titulo', Input::old('titulo'), array('class'=>'form-control')) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('categoria_pai', 'Categoria Pai', array('class'=>'col-sm-2 control-label')) }}
                            <div class="col-sm-5">
                                {{ Form::select('categoria_pai', $categorias, Input::old('categoria_pai'),array('class'=>'form-control')) }}
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-12">

                            {{ Form::submit('Salvar', array('class'=>'btn pull-right btn-success')) }}

                        </div>

                    {{ Form::close() }}

                </div>
            </section>
        </div>
    </div>
@stop