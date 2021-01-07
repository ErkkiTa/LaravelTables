
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"> <img src="{{asset('img/etr.png')}}" width="100" height="40" class="d-inline-block align-top"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/rada">Rajad</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/kaamerad">Kaamerad</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/andurid">Andurid</a>
      </li>
    </ul>  
  </div>
</nav>

<h1>Radade list</h1>

<table border="1"> 
<tr>
    <td>ID</td>
    <td>Raja nimi</td>
    <td>Raja asukoht</td> <br>
</tr>
@foreach ($rajad as $item)
<tr> 
    <td>{{$item->id}}</td>
    <td>{{$item->raja_nimi}}</td>
    <td>{{$item->raja_asukoht}}</td>
</tr>


@endforeach
</table>
 
</body>
</html>

