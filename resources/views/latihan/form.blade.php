<form action="<?php echo route('proses_input'); ?>" method="post">
	<input type="text" name="name" />
	<input type="password" name="password" />
	{{ csrf_field() }}
	<button type="submit" name="button">Kirim</button>
</form>