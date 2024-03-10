<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="bg-[#0F0F0F]">
{{--<div class="w-full max-w-xs m-auto mt-[300px]">--}}
{{--    <form action="{{ route('groups.store') }}"--}}
{{--          class="w-[400px] h-[400px] bg-slate-700 rounded-xl" method="Post">--}}
{{--        @csrf--}}
{{--        <div class="text-center text-white text-3xl pt-[25px]">--}}
{{--            Добавить группу--}}
{{--        </div>--}}
{{--        <input type="text" name="name"--}}
{{--               class="mt-[60px] mx-[65px] py-2 px-10 rounded-xl "--}}
{{--               placeholder="Название группы"--}}
{{--               value="{{ old('name') }}">--}}
{{--        @error('name')--}}
{{--        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--        @enderror--}}
{{--        <input type="text" name="mentor"--}}
{{--               class="mt-[20px] mx-[65px] py-2 px-10 rounded-xl"--}}
{{--               placeholder="Имя старосты"--}}
{{--               value="{{ old('mentor') }}">--}}
{{--        @error('mentor')--}}
{{--        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--        @enderror--}}
{{--        <button type="submit"--}}
{{--                class="text-white  mt-[40px] mb-4 ml-16 bg-red-700 py-2 px-[92px]--}}
{{--                 rounded-xl active:scale-105 active:bg-red-900">--}}
{{--            Отправить--}}
{{--        </button>--}}
{{--        <a href=" {{ route('groups.index') }}"--}}
{{--           class="text-white  ml-16 bg-red-700 py-2 px-[96px] rounded-xl--}}
{{--            active:scale-105 active:bg-red-900">Отменить--}}
{{--        </a>--}}
{{--    </form>--}}
{{--</div>--}}
@include('groups.form',['status'=>route('groups.store'),'name'=>'Добавить группу'])


</body>

</html>
