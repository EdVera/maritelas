@extends('admin.templates.layout')
@section('css')

@endsection
@section('title','Slider')

@section('content-fieldset')

	<div class="row">
		<div class="col s9">
			<caption><h4>Cover</h4></caption>
		</div>
		<div class="col s3 right-align valign-wrapper">
			<h4>
				<a href="#nuevo" class="waves-effect waves-light btn modal-trigger" style="background-color:#f3357f">+ Agregar</a>
			</h4>
		</div>
	</div>
  <fieldset id="fieldset-content" class="col s12">
    <table id="tableindex">
  		<thead>
  			<tr>
  				<th>Foto</th>
          <th>Título</th>
  				<th>Subtítulo</th>
  				<th>Acción</th>
  			</tr>
  		</thead>
  		<tbody>
  			@foreach($images as $image)
  			<tr>
					<td>
						<img src="{{ asset('img/slider/'.$image->name) }}" alt="Telas" style="max-width:150px">
					</td>
  				<td>{{ $image->title }}</td>
          <td>{{ $image->subtitle }}</td>
  				<td>
						<a href="{{ route('simages.edit', $image->id) }}" class="btn yellow lighten-1"><i class="material-icons">edit</i></a>
  					<a href="{{ route('simages.destroy', $image->id) }}" class="btn red lighten-1"><i class="material-icons">delete</i></a>
  				</td>
  			</tr>
  			@endforeach
  		</tbody>
  	</table>
  </fieldset>

@endsection

@section('addHtml')
	<div id="nuevo" class="modal">
    <div class="modal-content">
      <h4>Nueva Imágen</h4>
			{!! Form::open(['route' => 'simages.store', 'files' => true, 'method' => 'POST', 'id' => 'formcreate']) !!}
	  	<div class="row">
	  		<div class="input-field col s12 m12">
	  			{!! Form::label('title', 'Título de la imágen') !!}
	  			{!! Form::text('title',null,['class' => 'validate',  'required' => 'required']) !!}
	  		</div>
			</div>
			<div class="row">
	  		<div class="input-field col s12 m12">
	  			{!! Form::label('subtitle', 'Subtítulo') !!}
	  			{!! Form::text('subtitle',null,['class' => 'validate',  'required' => 'required']) !!}
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
			{!! Form::close() !!}
    </div>
    <div class="modal-footer">
      <input type="submit" class="modal-action modal-close waves-effect waves-green btn-flat" value="AGREGAR" form="formcreate">
    </div>
  </div>
@endsection
