@extends('layouts.approte')

@section('title', 'Form Rote')

@section('content')
	<form action="{{ route('proses_rote') }}" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<legend>Isi Biodata</legend>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</div>
	
			<div class="form-group">
				<label for="input" class="col-sm-2 control-label">Firstname :</label>
				<div class="col-sm-10">
					<input type="text" name="firstname" id="input" class="form-control" value="{{ old('firstname') }}" required="required">
				</div>
			</div>

			<div class="form-group">
				<label for="input" class="col-sm-2 control-label">Lastname :</label>
				<div class="col-sm-10">
					<input type="text" name="lastname" id="input" class="form-control" value="{{ old('lastname') }}" required="required">
				</div>
			</div>
	
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button type="submit" class="btn btn-primary" name="kirim" value="kirim">Kirim</button>
				</div>
			</div>
	</form>
@endsection