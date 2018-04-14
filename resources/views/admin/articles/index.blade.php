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
          <th>Curso</th>
  				<th>Descripción</th>
  				<th>Acción</th>
  			</tr>
  		</thead>
  		<tbody>
  			@foreach($articles as $article)
  			<tr>
					<td>
						<img src="{{ asset('img/courses/'.$article->image) }}" alt="Telas" style="max-width:150px">
					</td>
  				<td>{{ $article->title }}</td>
          <td>{{ $article->description }}</td>
  				<td>
  					<a href="{{ route('courses.destroy', $article->id) }}" class="btn red lighten-1"><i class="material-icons">delete</i></a>
  				</td>
  			</tr>
  			@endforeach
  		</tbody>
  	</table>
  </fieldset>

@endsection
