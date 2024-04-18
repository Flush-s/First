<x-app-layout>
    <x-slot name="header">
        <h2
            class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
        >
            {{ __("Groups") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"
            >
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="text-white w-full mt-14 mx-4 px-4">
                        <div
                            class="flex justify-between border-b border-[#868686] pb-4"
                        >
                            <h2 class="text-5xl">Группы</h2>
                            <a
                                href="{{ route('groups.create') }}"
                                class="text-5xl active:scale-105"
                            >
                                Добавить группу
                            </a>
                        </div>
                        <div class="text-3xl">
                            <div class="flex border-b border-[#868686] py-4">
                                <p class="mr-[25px]">#</p>
                                <p class="mr-[280px]">Группа</p>
                                <p class="mr-[945px]">Староста</p>
                                <p>Управление группой</p>
                            </div>
                            <table class="w-full">
                                <tbody class="flex-col">
                                    @foreach($groups as $group)
                                    <tr class="border-b border-[#868686]">
                                        <td class="w-[40px]">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="w-[400px]">
                                            {{ $group->name }}
                                        </td>
                                        <td class="w-[400px]">
                                            {{ $group->mentor }}
                                        </td>
                                        <td
                                            class="flex items-center pl-[500px] py-4"
                                        >
                                            <a
                                                href="{{
        route('groups.show', $group)
                                                }}"
                                                class="pr-7"
                                                >Посмотреть</a
                                            >
                                            <form
                                                action="{{ route('groups.destroy', $group->id) }}"
                                            >
                                                @csrf @method('delete')
                                                <a
                                                    href="{{ route('groups.edit', $group->id) }}"
                                                    class="pr-7"
                                                    >Редактировать</a
                                                >
                                            </form>
                                            <form
                                                action="{{ route('groups.destroy', $group->id) }}"
                                                method="Post"
                                            >
                                                @csrf @method('delete')
                                                <button type="submit">
                                                    @include("include.img.closeImg")
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
