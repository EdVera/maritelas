@extends('admin.templates.layout')

@section('name','Cursos')

@section('content-fieldset')

  <div class="row">
    <div class="col s9">
      <caption><h4>Editar</h4></caption>
    </div>
  </div>

  <fieldset id="fieldset-content" class="col s12">
    <p> Edita la información de tu producto: {{ $product->name }}.</p>
    <hr>
    {!! Form::open(['route' => ['products.update',$product], 'files' => true, 'method' => 'PUT', 'id' => 'formcreate']) !!}
    <div class="row">
      <div class="input-field col s12 m12">
        {!! Form::label('name', 'Nombre del producto') !!}
        {!! Form::text('name',$product->name,['class' => 'validate',  'required' => 'required']) !!}
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m12">
        {!! Form::label('description', 'Descripción') !!}
        {!! Form::text('description',$product->description,['class' => 'validate',  'required' => 'required']) !!}
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
