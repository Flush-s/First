<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@vite('resources/css/app.css')
	<title>Document</title>
</head>

<body>
	<div class="w-full max-w-xs m-auto mt-[300px]">
		<form action="{{ route('groups.update', $groups -> id) }}" class="w-[300px] h-[300px] bg-slate-700 rounded-xl"
			method="Post">
			@csrf
			@method('PUT')
			<div class="text-center text-xl pt-[25px]">
				Добавить группу
			</div>
			<input type="text" value="{{ $groups->name }}" name="name" class="mt-[25px] mx-4 py-2 px-10 rounded-xl"
				placeholder="Название группы">
			<input type="text" value="{{ $groups->mentor }}" name="mentor" class="mt-[10px] mx-4 py-2 px-10 rounded-xl"
				placeholder="Имя старосты">
			<button type="submit" class="text-white  my-[30px] ml-16 bg-red-700 py-2 px-10 rounded-xl">Отправить</button>
		</form>
	</div>
</body>

</html>