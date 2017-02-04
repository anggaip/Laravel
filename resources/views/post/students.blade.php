@foreach ($students as $s)

	<li>{{ $s['nim'] }} | <a href="{{ route('post.show', $s['id']) }}"> {{ $s['name'] }} </a> | <a href="{{ route('post.edit', $s['id']) }}">Edit</a> | 
	<form action="{{ route('post.destroy', $s['id']) }}" method="post">
		{{ method_field('delete') }}
		{{ csrf_field() }}
		<button type="submit">Hapus</button>
		
	</form>
	</li>

@endforeach

<a href="{{ route('post.create') }}">Tambah</a>