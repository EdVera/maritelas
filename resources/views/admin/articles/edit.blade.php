@extends('admin.templates.layout')

@section('title','Cursos')

@section('content-fieldset')

  <div class="row">
    <div class="col s9">
      <caption><h4>Nuevo artículo</h4></caption>
    </div>
  </div>

  <fieldset id="fieldset-content" class="col s12">
    <p> Agrega un nuevo artículo al blog.</p>
    <hr>
    <div class="row">
      <div class="col s6 offset-s3 m4 offset-m4">
        <img src="{{ asset('img/articles/'.$article->image) }}" style="width:100%">
      </div>
    </div>
    {!! Form::open(['route' => ['articles.update',$article], 'files' => true, 'method' => 'PUT', 'id' => 'formcreate']) !!}
    <div class="row">
      <div class="input-field col s12 m10 offset-m1">
        {!! Form::label('title', 'Título del artículo') !!}
        {!! Form::text('title',$article->title,['class' => 'validate',  'required' => 'required']) !!}
      </div>
    </div>

    <div class="row">
      <div class="file-field input-field col s12 m10 offset-m1">
        <div class="btn blue">
          <span>Home</span>
          {!! Form::file('imgmini') !!}
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Elige una imagen para el preview en Home.">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="file-field input-field col s12 m10 offset-m1">
        <div class="btn blue">
          <span>Blog</span>
          {!! Form::file('cover') !!}
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Elige una imagen.">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12 m10 offset-m1">
        {!! Form::label('description', 'Descripción') !!}
        {!! Form::text('description',$article->description,['class' => 'validate',  'required' => 'required']) !!}
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12 m10 offset-m1">
        {!! Form::label('text', 'Texto del artículo') !!}
        {!! Form::textarea('text', $article->text, ['class' => 'validate materialize-textarea', 'required']) !!}
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12 m10 offset-m1">
        {!! Form::label('video', 'Video') !!}
        {!! Form::text('video',$article->video,['class' => 'validate']) !!}
      </div>
    </div>

    <div class="row">
      <div class="file-field input-field col s12 m10 offset-m1">
  			<div class="btn">
  				<span>Imagenes</span>
  				<input type="file" name="images[]" multiple />
  			</div>
  			<div class="file-path-wrapper">
  				<input class="file-path validate" type="text" placeholder="Elige una o varias imagenes.">
  			</div>
  		</div>
    </div>

  	<div class="row">
  		<div class="col s12 center">
  			{!! Form::submit('Registrar',['class' => 'btn teal darken-1', 'style' => 'margin: auto']) !!}
  		</div>
  	</div>
    {!! Form::close() !!}
  </fieldset>

  <div class="section row">
    @foreach ($imagenes->sortByDesc('position') as $img)
    <div class="col s3">
      <img src="{{ asset('img/articles/'.$img->name) }}" style="width:100%">
      <a href="{{ $img->id }}/editsingleimage" class="btn yellow darken-1"><i class="material-icons">edit</i></a>
      <a href="{{ $img->id }}/destroysingleimage" class="btn red lighten-1"><i class="material-icons">delete</i></a>
    </div>
    @endforeach
  </div>

@endsection
