<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Muuda') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1>Muuda andurit</h1>
                <form action="dashboard/andur/editandur" method="POST">
                    @csrf
                        <input type="hidden" name="id" value="{{$data['id']}}">
                        <input type="text" name="id" value="{{$data['id']}}"><br> <br>
                        <input type="text" name="anduri_nimi" value="{{$data['anduri_nimi']}}"><br> <br>
                        <input type="text" name="anduri_asukoht" value="{{$data['anduri_asukoht']}}"><br> <br>
                    <button type="submit">Uuenda</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
