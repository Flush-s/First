<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@vite('resources/css/app.css')
	<title>Document</title>
</head>

<body>

	@include ('include.nav')

	<div class="grid grid-cols-3">
		<div class="bg-black">1</div>
		<div>
			<table class="table-fixed">
				<thead>
					<tr>
						<th>Song</th>
						<th>Artist</th>
						<th>Year</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
						<td>Malcolm Lockyer</td>
						<td>1961</td>
					</tr>
					<tr>
						<td>Witchy Woman</td>
						<td>The Eagles</td>
						<td>1972</td>
					</tr>
					<tr>
						<td>Shining Star</td>
						<td>Earth, Wind, and Fire</td>
						<td>1975</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="bg-black">3</div>
	</div>

	<h1>
		ssss
	</h1>

	@include ('include.footer')
</body>

</html>