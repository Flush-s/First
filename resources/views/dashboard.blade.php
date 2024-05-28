<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Groups") }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between">
                <button
                    class="bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 h-14 w-[200px] mb-4 rounded-xl border-2 dark:border-none"
                    id="change">
                    Change theme
                </button>

                <div class="flex">
                    <form action=" {{ route("groups.index") }} " class="flex" method="Get">
                        <input type="text" placeholder="Search"
                            class="bg-white h-14 dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-xl border-2 dark:border-none mr-4 px-10"
                            id="search" name='search' value="{{ isset($search) ? $search : '' }}" />
                        <button
                            class="bg-white flex items-center justify-center dark:bg-gray-800 text-gray-900 dark:text-gray-100 h-14 w-14 mb-4 rounded-xl border-2 dark:border-none active:dark:bg-gray-700"
                            type='submit'>
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            </buttonb>
                    </form>


                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="text-white w-full mt-14 mx-4 px-4">
                        <div class="flex justify-between border-b border-[#868686] pb-4">
                            <h2 class="text-5xl text-gray-900 dark:text-gray-100">
                                Группы
                            </h2>
                            <a href="{{ route('groups.create') }}"
                                class="text-5xl active:scale-105 text-gray-900 dark:text-gray-100">
                                Добавить группу
                            </a>
                        </div>
                        <div class="text-3xl">
                            <div class="flex border-b border-[#868686] py-4">
                                <p class="mr-[25px] text-gray-900 dark:text-gray-100">
                                    #
                                </p>
                                <p class="mr-[280px] text-gray-900 dark:text-gray-100">
                                    Группа
                                </p>
                                <p class="mr-[945px] text-gray-900 dark:text-gray-100">
                                    Староста
                                </p>
                                <p>Управление группой</p>
                            </div>
                            <table class="w-full">
                                <tbody class="flex-col text-gray-900 dark:text-gray-100">
                                    @foreach($groups as $key => $group)
                                        <tr class="border-b border-[#868686]">
                                            <td class="w-[40px]">
                                                {{ $groups->firstItem() + $key }}
                                            </td>
                                            <td class="w-[400px]">
                                                {{ $group->name }}
                                            </td>
                                            <td class="w-[400px]">
                                                {{ $group->mentor }}
                                            </td>
                                            <td class="flex items-center pl-[500px] py-4">
                                                <a href="{{route('groups.show', $group)}}" class="pr-7">Посмотреть</a>
                                                <form action="{{ route('groups.destroy', $group->id) }}">
                                                    @csrf @method('delete')
                                                    <a href="{{ route('groups.edit', $group->id) }}"
                                                        class="pr-7">Редактировать</a>
                                                </form>
                                                <form action="{{ route('groups.destroy', $group->id) }}" method="Post">
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
                            <div>
                                {{ $groups->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>