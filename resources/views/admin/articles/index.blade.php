@extends('admin.templates.layout')
@section('css')

@endsection
@section('title','Articles')

@section('content-fieldset')

	<div class="row">
		<div class="col s9">
			<caption><h4>Artículos</h4></caption>
		</div>
		<div class="col s3 right-align valign-wrapper">
			<h4>
				<a href="{{ route('articles.create') }}" class="waves-effect waves-light btn modal-trigger" style="background-color:#f3357f">+ Agregar</a>
			</h4>
		</div>
	</div>
  <fieldset id="fieldset-content" class="col s12">
    <table id="tableindex">
  		<thead>
  			<tr>
  				<th>Foto</th>
          <th>Artículo</th>
  				<th>Descripción</th>
  				<th>Posición</th>
  				<th>Acción</th>
  			</tr>
  		</thead>
  		<tbody>
  			@foreach($articles as $article)
  			<tr>
					<td>
						<img src="{{ asset('img/articles/'.$article->image) }}" alt="Telas" style="max-width:150px">
					</td>
  				<td>{{ $article->title }}</td>
          <td>{{ $article->description }}</td>
          <td>{{ $article->position }}</td>
  				<td>
						<a href="{{ route('articles.edit', $article->id) }}" class="btn yellow darken-1"><i class="material-icons">edit</i></a>
  					<a href="{{ route('articles.destroy', $article->id) }}" class="btn red lighten-1"><i class="material-icons">delete</i></a>
  				</td>
  			</tr>
  			@endforeach
  		</tbody>
  	</table>
  </fieldset>

@endsection
