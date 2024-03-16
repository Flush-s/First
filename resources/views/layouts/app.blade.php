<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Jura&display=swap" rel="stylesheet">
	@vite('resources/css/app.css')
	<title>@yield('title')</title>
</head>

<body class="bg-[#0F0F0F] font-mainfont">

	@include ("include.nav")

	@yield("table")



</body>

</html>