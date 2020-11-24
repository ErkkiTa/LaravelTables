<h1>Radade list</h1>

<table border="1"> 
<tr>

    <td>ID</td>
    <td>Raja nimi</td>
    <td>Raja asukoht</td>
    <td>Tegevused</td>
</tr>
@foreach ($rajad as $item)
<tr>
    <td>{{$item['id']}}</td>
    <td>{{$item['raja_nimi']}}</td>
    <td>{{$item['raja_asukoht']}}</td>
    <td>
    
    <a href={{"delete/".$item['id']}}>Kustuta</a>
    <a href={{"edit/".$item['id']}}>Muuda</a>
    </td>
</tr>


@endforeach
</table>