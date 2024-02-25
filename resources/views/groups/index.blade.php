@extends('layouts.app')
@section("title",'Groups')
@section("table")
<div class="text-white w-full mt-14 mx-4 px-4 ">
	<div class="flex justify-between border-b border-[#868686] pb-4 ">
		<h2 class="text-5xl ">
			Группы
		</h2>
		<a href="{{ route('groups.create') }}" class="text-5xl active:scale-105">
			Добавить группу
		</a>
	</div>
	<div class="text-3xl">
		<table>
			<thead class="border-b border-[#868686]">
				<th class="pr-14 py-2">#</th>
				<th class="pr-[100px]">Группа</th>
				<th class="pr-[565px]">Староста</th>
				<th>Управление группой</th>
			</thead>
			<tbody class="w-full">
				@foreach($groups as $group)
				<tr class="border-b border-[#868686]">
					<td>
						{{ $loop->iteration }}
					</td>
					<td>
						{{ $group->name }}
					</td>
					<td>
						{{ $group->mentor }}
					</td>
					<td class="flex items-center py-4">
						<a href="{{ route('groups.show', $group) }}" class="pr-7">Посмотреть</a>
						<form action="{{ route('groups.destroy', $group->id) }}">
							@csrf
							@method('delete')
							<a href="{{ route('groups.edit', $group->id) }}" class="pr-7">Редактировать</a>
						</form>
						<form action="{{ route('groups.destroy', $group->id) }}" method="Post">
							@csrf
							@method('delete')
							<button type="submit">@include ("include.img.closeImg")</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection