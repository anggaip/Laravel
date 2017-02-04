<ul>
	@foreach ($kelas->students as $student)
	<li>{{ $student['nim'] }}, {{ $student['name'] }}, {{ $student['address'] }}</li>
	@endforeach
</ul>