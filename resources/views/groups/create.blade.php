<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="bg-[#0F0F0F]">
@include('groups.form', ['status' => route('groups.store'), 'name' => 'Добавить группу', 'metod' => 'POST'])
</body>

</html>
