@extends('layouts.admin')

@section('cssExtras')
@endsection

@section('jsLibExtras')
@endsection

@section('content')
	<div class="row mb-2 px-2">
		<div class="col-9">
			<a href="{{ route('config.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-6 text-center my-3">
			<div class="card">
				<form action="{{ route('config.politica.update',$politicas[0]->id) }}" method="post" class="card-body">
					@csrf
					@method('put')
					<label class="h5">{{$politicas[0]->titulo}}</label>
					<textarea name="descripcion" rows="10">{{$politicas[0]->descripcion}}</textarea>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-12 col-md-6 text-center my-3">
			<div class="card">
				<form action="{{ route('config.politica.update',$politicas[6]->id) }}" method="post" class="card-body">
					@csrf
					@method('put')
					<label class="h5">{{$politicas[6]->titulo}}</label>
					<textarea name="descripcion" rows="10">{{$politicas[6]->descripcion}}</textarea>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-12 col-md-6 text-center my-3">
			<div class="card">
				<form action="{{ route('config.politica.update',$politicas[1]->id) }}" method="post" class="card-body">
					@csrf
					@method('put')
					<label class="h5">{{$politicas[1]->titulo}}</label>
					<textarea name="descripcion" rows="10">{{$politicas[1]->descripcion}}</textarea>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-12 col-md-6 text-center my-3">
			<div class="card">
				<form action="{{ route('config.politica.update',$politicas[7]->id) }}" method="post" class="card-body">
					@csrf
					@method('put')
					<label class="h5">{{$politicas[7]->titulo}}</label>
					<textarea name="descripcion" rows="10">{{$politicas[7]->descripcion}}</textarea>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-12 col-md-6 text-center my-3">
			<div class="card">
				<form action="{{ route('config.politica.update',$politicas[2]->id) }}" method="post" class="card-body">
					@csrf
					@method('put')
					<label class="h5">{{$politicas[2]->titulo}}</label>
					<textarea name="descripcion" rows="10">{{$politicas[2]->descripcion}}</textarea>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-12 col-md-6 text-center my-3">
			<div class="card">
				<form action="{{ route('config.politica.update',$politicas[8]->id) }}" method="post" class="card-body">
					@csrf
					@method('put')
					<label class="h5">{{$politicas[8]->titulo}}</label>
					<textarea name="descripcion" rows="10">{{$politicas[8]->descripcion}}</textarea>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-12 col-md-6 text-center my-3">
			<div class="card">
				<form action="{{ route('config.politica.update',$politicas[3]->id) }}" method="post" class="card-body">
					@csrf
					@method('put')
					<label class="h5">{{$politicas[3]->titulo}}</label>
					<textarea name="descripcion" rows="10">{{$politicas[3]->descripcion}}</textarea>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-12 col-md-6 text-center my-3">
			<div class="card">
				<form action="{{ route('config.politica.update',$politicas[9]->id) }}" method="post" class="card-body">
					@csrf
					@method('put')
					<label class="h5">{{$politicas[9]->titulo}}</label>
					<textarea name="descripcion" rows="10">{{$politicas[9]->descripcion}}</textarea>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-12 col-md-6 text-center my-3">
			<div class="card">
				<form action="{{ route('config.politica.update',$politicas[4]->id) }}" method="post" class="card-body">
					@csrf
					@method('put')
					<label class="h5">{{$politicas[4]->titulo}}</label>
					<textarea name="descripcion" rows="10">{{$politicas[4]->descripcion}}</textarea>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-12 col-md-6 text-center my-3">
			<div class="card">
				<form action="{{ route('config.politica.update',$politicas[10]->id) }}" method="post" class="card-body">
					@csrf
					@method('put')
					<label class="h5">{{$politicas[10]->titulo}}</label>
					<textarea name="descripcion" rows="10">{{$politicas[10]->descripcion}}</textarea>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-12 col-md-6 text-center my-3">
			<div class="card">
				<form action="{{ route('config.politica.update',$politicas[5]->id) }}" method="post" class="card-body">
					@csrf
					@method('put')
					<label class="h5">{{$politicas[5]->titulo}}</label>
					<textarea name="descripcion" rows="10">{{$politicas[5]->descripcion}}</textarea>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-12 col-md-6 text-center my-3">
			<div class="card">
				<form action="{{ route('config.politica.update',$politicas[11]->id) }}" method="post" class="card-body">
					@csrf
					@method('put')
					<label class="h5">{{$politicas[11]->titulo}}</label>
					<textarea name="descripcion" rows="10">{{$politicas[11]->descripcion}}</textarea>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
@section('jsLibExtras2')
	<script>
	    tinymce.init({
	      selector: 'textarea',
	      // plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
	      // toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
				menubar: false,
			  plugins: [
			    'advlist autolink lists link image charmap print preview anchor',
			    'searchreplace visualblocks code fullscreen',
			    'insertdatetime media table paste code help wordcount',
					'advlist autolink lists link image charmap print preview anchor wordcount',

					'searchreplace visualblocks code fullscreen table visualblocks',
					'insertdatetime media table contextmenu paste code imagetools',
					'textcolor colorpicker'
			  ],
			  // toolbar: 'undo redo | formatselect | ' +
			  // 'bold italic backcolor | alignleft aligncenter ' +
			  // 'alignright alignjustify | bullist numlist outdent indent | ' +
			  // 'removeformat | help',
				toolbar: 'forecolor backcolor | insert table | undo redo | removeformat styleselect |  bold italic underline |  alignleft aligncenter alignright alignjustify |  bullist numlist | outdent indent | link image | code visualblocks',
				resize: false,
			  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
	   });
	  </script>
@endsection
@section('jqueryExtra')
@endsection
