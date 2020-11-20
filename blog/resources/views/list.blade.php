<h1>Rajade list</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Raja nimi</td>
        <td>Raja asukoht</td>
        <td>Kustuta   Edit</td>
    </tr>
    @foreach($rajad as $rada)
    <tr>
        <td>{{$rada['id']}}</td>
        <td>{{$rada['raja_nimi']}}</td>
        <td>{{$rada['raja_asukoht']}}</td>
        <td>
        <a href={{"delete/" . $rada['id']}}>Kustuta</a>
        <a href={{"edit/" . $rada['id']}}>Edit</a>
        </td>
    </tr>
    @endforeach
</table>