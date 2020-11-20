<h1>Radade lisamine</h1>
<form action="add" method="POST">
    @csrf
    <input type="text" name="id" placeholder="Raja ID"> <br> <br>
    <input type="text" name="raja_nimi" placeholder="Raja nimi"> <br> <br>
    <input type="text" name="raja_asukoht" placeholder="Raja asukoht"> <br> <br>
<button type="submit">Lisa</button>


</form>