<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Muuda') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1>Muuda rada</h1>
                <form action="/dashboard/rajad/edit" method="POST">
                    @csrf
                        <input type="hidden" name="id" value="{{$data['id']}}">
                        <input type="text" name="id" value="{{$data['id']}}"><br> <br>
                        <input type="text" name="raja_nimi" value="{{$data['raja_nimi']}}"><br> <br>
                        <input type="text" name="raja_asukoht" value="{{$data['raja_asukoht']}}"><br> <br>
                    <button type="submit">Uuenda</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
