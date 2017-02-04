<h1>Edit Post</h1>

@if (count($errors) > 0)

	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li> {{ $error }} </li>
			@endforeach
		</ul>
	</div>

@endif

<form action="{{ route('post.update', $student['id']) }}" method="post">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	<p>NIM: <input type="text" name="nim" value="{{ $student['nim'] }}" /></p>
	<p>Nama: <input type="text" name="nama" value="{{ $student['name'] }}" /></p>
	<button type="submit">Simpan</button>
</form>