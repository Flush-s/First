<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@vite('resources/css/app.css')
	<title>Document</title>
</head>

<body>
	<!-- <h1 class="mb-0">Detail</h1>
	<div>
		<div class="row">
			<label class="form-label">Title</label>
			<input type="text" name="title" pattern="[A-Za-z]{3}" class="form-control" placeholder="Name" id=""
				value="{{ $groups->name }}">
		</div>
		<div class="col mb-3">
			<label class="form-label">Title</label>
			<input type="text" name="title" pattern="[A-Za-z]{3}" onclick="agreeForm(this.form)" class="form-control"
				placeholder="Mentor" id="" value="{{ $groups->mentor }}">
		</div>
	</div> -->

	<div class="w-full max-w-xs m-auto mt-[300px]">
		<form action="{{ route('groups.show', $groups -> id) }}" disable="true"
			class="w-[300px] h-[300px] bg-slate-700 rounded-xl" method="Post">
			@csrf
			<div class="text-center text-xl pt-[25px]">
				Просмотр
			</div>
			<label class="form-label">Name</label>
			<input type="text" value="{{ $groups->name }}" disabled name="name"
				class="mt-[25px] mx-4 py-2 px-10 rounded-xl disabled:bg-white" placeholder="Название группы">
			<label class="form-label">Mentor</label>
			<input type="text" value="{{ $groups->mentor }}" disabled name="mentor"
				class="mt-[10px] mb-8 mx-4 py-2 px-10 rounded-xl disabled:bg-white" placeholder="Имя старосты">
			<a href="{{ route('groups.index',$groups) }} "
				class="ml-[80px] mt-[10px] py-3 px-10 rounded-xl bg-red-950 text-white">Назад</a>
		</form>
	</div>

</body>

</html>