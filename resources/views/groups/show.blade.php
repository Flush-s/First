<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="bg-[#0F0F0F]">
<div class="w-full max-w-xs m-auto mt-[300px]">
    <form action="{{ route('groups.show', $group->id) }}"
          class="w-[400px] h-[400px] bg-slate-700 rounded-xl" method="Post">
        @csrf
        @method('PUT')
        <div class="text-center text-white text-3xl pt-[25px]">
            Просмотр
        </div>
        <div class="mt-[40px] text-center ">
            <p class="text-white">Name</p>
            <input type="text" name="name" value="{{ $group->name }}" disabled
                   class="py-2 px-10 rounded-xl disabled:bg-white"
                   placeholder="Название группы" required>
        </div>
        <div class="mt-[10px] text-center ">
            <p class="text-white">Mentor</p>
            <input type="text" name="mentor" value="{{ $group->mentor }}"
                   disabled
                   class=" mb-[50px] mx-[65px] py-2 px-10 rounded-xl disabled:bg-white"
                   placeholder="Имя старосты" required>
        </div>
        <a href=" {{ route('groups.index', $group) }}"
           class="text-white  ml-[70px] bg-red-700 py-2 px-[96px] rounded-xl
				 active:scale-105 active:bg-red-900">Отменить
        </a>
    </form>
</div>
</body>

</html>
