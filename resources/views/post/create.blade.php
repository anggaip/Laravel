<h1>Create Post</h1>

@if (count($errors) > 0)

	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li> {{ $error }} </li>
			@endforeach
		</ul>
	</div>

@endif

<form action="{{ route('post.store') }}" method="post">
	{{ csrf_field() }}
	<p>NIM: <input type="text" name="nim" value="{{ old('nim') }}" /></p>
	<p>Nama: <input type="text" name="nama" value="{{ old('nama') }}" /></p>
	<button type="submit">Simpan</button>
</form>