<div class="w-full max-w-xs m-auto mt-[300px]">
    <form action="{{ $status }}"
          class="w-[400px] h-[400px] bg-slate-700 rounded-xl"
          method="Post"> <!-- взять из массива-->
        @csrf
        @method($metod) <!-- взять из массива-->
        <div class="text-center text-white text-3xl pt-[25px]">
            {{ $name }}
        </div>
        <input type="text" name="name"
               class="mt-[60px] mx-[65px] py-2 px-10 rounded-xl "
               placeholder="Название группы" required
               value={{ (isset ($group) && !old('name')) ? $group->name : old('name') }}>
        <!-- {{--        value="{{ $group->name }}"--}} -->
        <!--добавить тернарный оператор в value и использовать isset()-->
        <input type="text" name="mentor"
               class="mt-[20px] mx-[65px] py-2 px-10 rounded-xl"
               placeholder="Имя старосты" required
               value={{ (isset ($group) && !old('mentor')) ? $group->mentor : old('mentor') }}>
        <!-- {{--        value="{{ $group->mentor }}"--}} -->
        <button type="submit"
                class="text-white  mt-[40px] mb-4 ml-16 bg-red-700 py-2
                px-[92px]  rounded-xl active:scale-105 active:bg-red-900">
            Отправить
        </button>
        <a href=" {{ route('groups.index') }}"
           class="text-white  ml-16 bg-red-700 py-2 px-[96px] rounded-xl
           active:scale-105 active:bg-red-900">Отменить
        </a>
    </form>
</div>
