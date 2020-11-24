<h1>Muuda rada</h1>

<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text" name="id" value="{{$data['id']}}"><br> <br>
    <input type="text" name="raja_nimi" value="{{$data['raja_nimi']}}"><br> <br>
    <input type="text" name="raja_asukoht" value="{{$data['raja_asukoht']}}"><br> <br>
    <button type="submit">uuenda</button>
</form>