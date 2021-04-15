<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lisa rada') }}
        </h2>
        <style type="text/css">
            @font-face {
                font-family: Arimo;
                src: url('fonts/Arimo.ttf');
                    }
        </style>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1>Radade lisamine</h1>
                <form action="/dashboard/addrada" method="POST">
                    @csrf
                    <input type="text" name="id" placeholder="Raja ID"> <br> <br>
                    <input type="text" name="raja_nimi" placeholder="Raja nimi"> <br> <br>
                    <input type="text" name="raja_asukoht" placeholder="Raja asukoht"> <br> <br>

                    
                <button style="padding:10px;" type="submit">Lisa</button>


                </form>
            </div>
        </div>
    </div>
</x-app-layout>