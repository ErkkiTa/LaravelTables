<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Raja ja andurite liitmine') }}
        </h2>
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <div class="container-raja-nimi">
            <span class="font-bold"> Raja nimi: {{ $data->id }} {{ $data->raja_nimi }} {{ $data->raja_asukoht }}</span>
            </div>
            <form action="/dashboard/rajad/liitmine/" method="POST">
            @csrf
            <input type="hidden" name="rada" value="{{$data->id}}" />
            <div class="container-dropdown">
                <div class="form-group">
                    <select name="anduri_id" id="anduri_nimi" class="anduri-drop" placeholder="Vali andur">

                            @foreach($andurid as $item)
                                <option value="{{ $item->id}}">{{ $item->anduri_nimi }}</option>
                            @endforeach
                    </select>


                </div>
            </div>
            <button class="andur-lisa btn btn-success" type="submit">Lisa andur</button>
            </form>
    </div>
</x-app-layout>
