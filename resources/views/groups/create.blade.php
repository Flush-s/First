<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="{{ route("groups.store") }}" method = "Post">
		@csrf
		<input type="text" name="name" placeholder = "Название группы">
		<input type="text" name="mentor" placeholder = "Имя старосты">
		<button type="submit">Отправить</button>

	</form>
	
</body>
</html>