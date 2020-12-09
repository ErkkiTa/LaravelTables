<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rajad') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1>Radade list</h1>

<table border="1"> 
<tr>
    <td>ID</td>
    <td>Raja nimi</td>
    <td>Raja asukoht</td> <br>
    <td>Tegevused</td>
</tr>
@foreach ($rajad as $item)
<tr> 
    <td>{{$item->id}}</td>
    <td>{{$item->raja_nimi}}</td>
    <td>{{$item->raja_asukoht}}</td>
    <td>
    <a href={{"rajad/delete/".$item['id']}}>Kustuta</a>
    <a href={{"rajad/edit/".$item['id']}}>Muuda</a>
    </td>
</tr>


@endforeach
</table>

        </div>
    </div>
</x-app-layout>