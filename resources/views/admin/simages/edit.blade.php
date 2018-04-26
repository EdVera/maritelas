@extends('admin.templates.layout')

@section('title','Cursos')

@section('content-fieldset')

  <div class="row">
    <div class="col s9">
      <caption><h4>Editar</h4></caption>
    </div>
  </div>

  <fieldset id="fieldset-content" class="col s12">
    <p> Edita la información de tu imágen: {{ $cover->title }}.</p>
    <hr>
    {!! Form::open(['route' => ['simages.update',$cover], 'files' => true, 'method' => 'PUT', 'id' => 'formcreate']) !!}
    <div class="row">
      <div class="input-field col s12 m12">
        {!! Form::label('title', 'Titulo de la imágen') !!}
        {!! Form::text('title',$cover->title,['class' => 'validate',  'required' => 'required']) !!}
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m12">
        {!! Form::label('subtitle', 'Subtítulo') !!}
        {!! Form::text('subtitle',$cover->subtitle,['class' => 'validate',  'required' => 'required']) !!}
      </div>
    </div>
    <div class="row">
      <div class="file-field input-field col s12 m12">
        <div class="btn blue">
          <span>Imagen</span>
          {!! Form::file('image') !!}
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Elige una imagen.">
        </div>
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