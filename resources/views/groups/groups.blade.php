<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Jura&display=swap" rel="stylesheet">
	@vite('resources/css/app.css')
	<title>Document</title>
</head>

<body class="bg-[#0F0F0F] font-mainfont">

	@include ("include.nav")

	<div class="text-white w-full mt-14 mx-4 px-4 ">
		<div class="flex justify-between border-b border-[#868686] pb-4 ">
			<h2 class="text-5xl ">
				Группы
			</h2>
			<a href="#" class="text-5xl active:scale-105">
				Добавить группу
			</a>
		</div>
		<div class="text-3xl">
			<table>
				<thead class="border-b border-[#868686]">
					<th class="pr-14 py-2">#</th>
					<th class="pr-14">Группа</th>
					<th class="pr-[620px]">Староста</th>
					<th>Управление группой</th>
				</thead>
				<tbody>
					<tr class="border-b border-[#868686]">
						<td>
							1
						</td>
						<td>
							Группа
						</td>
						<td>Имя старосты</td>
						<td class="flex items-center py-4">
							<a href="#" class="pr-7">Посмотреть</a>
							<a href="#" class="pr-7">Редактировать</a>
							<a href="#" class="active:scale-105">@include ("include.img.closeImg")</a>
						</td>
					</tr>

				</tbody>
			</table>
		</div>
	</div>
</body>

</html>