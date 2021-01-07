<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Andurite lisamine') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="/dashboard/andurilisa" method="POST">
                    @csrf
                    <input type="text" name="id" placeholder="Anduri ID"> <br> <br>
                    <input type="text" name="anduri_nimi" placeholder="Anduri nimi"> <br> <br>
                    <input type="text" name="anduri_asukoht" placeholder="Anduri asukoht"> <br> <br>
                    
                    
                <button style="padding:10px;" type="submit">Lisa</button>


                </form>
                
            </div>
        </div>
    </div>
</x-app-layout>
