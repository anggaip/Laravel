<form action="/users" method="POST">
	{!! csrf_field() !!}
	<input type="text" name="name" required>
	<input type="email" name="email" required>
	<input type="password" name="password" required>
	<button type="submit" class="btn btn-default">Create</button>
</form>