@extends('admin.templates.layout')

@section('title','Cursos')

@section('content-fieldset')

  <div class="row">
    <div class="col s9">
      <caption><h4>Editar</h4></caption>
    </div>
  </div>

  <fieldset id="fieldset-content" class="col s12">
    <hr>
    <div class="row">
      <div class="col s6 offset-s3 m4 offset-m4">
        <img src="{{ asset('img/articles/'.$img->name) }}" style="width:100%">
      </div>
    </div>
    {!! Form::open(['route' => ['articles.updatesingleimage',$img], 'files' => true, 'method' => 'POST', 'id' => 'formcreate']) !!}
    <div class="row">
      <div class="input-field col s12 m12">
        {!! Form::label('position', 'Posición') !!}
        {!! Form::text('position',$img->position,['class' => 'validate',  'required' => 'required']) !!}
      </div>
    </div>
  	<div class="row">
  		<div class="col s12 center">
  			{!! Form::submit('Actualizar',['class' => 'btn teal darken-1', 'style' => 'margin: auto']) !!}
  		</div>
  	</div>
    {!! Form::close() !!}
  </fieldset>


@endsection
