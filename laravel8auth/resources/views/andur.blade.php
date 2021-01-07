<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Andurid') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1>Radade list</h1>

<table border="1"> 
<tr >
    <td>Anduri ID</td>
    <td>Anduri nimi</td>
    <td>Rada</td>
    <td>Temperatuur keskmine </td> <br>
    <td>Päeva keskmine aktiivsus</td>
    <td>Tegevused</td>
</tr>

@foreach($andurid as $item)
<tr >
    <td>{{$item->id}}</td>
    <td>{{$item->anduri_nimi}}</td>
    <td>{{$item->anduri_asukoht}}</td>
    <td>{{$item->anduri_temp}} </td> <br>
    <td>{{$item->anduri_aktiivsus}}</td>
    <td>
    <a href={{"delete/".$item['id']}}>Kustuta</a>
    <a href={{"editandur/".$item['id']}}>Muuda</a>
    </td>

</tr>

@endforeach




</table>

        </div>
    </div>
</x-app-layout>