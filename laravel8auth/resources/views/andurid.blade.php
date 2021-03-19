<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
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
    <h1 style="text-align: center; margin-top: 10px">Andurid</h1>
<div class="container">
    <table border="1"> 
<tr >
    <td>Anduri ID</td>
    <td>Anduri nimi</td>
    <td>Rada</td>
    <td>Temperatuur keskmine </td> <br>
    <td>Päeva keskmine aktiivsus</td>

</tr>

@foreach($andurid as $item)
<tr >
    <td>{{$item->id}}</td>
    <td>{{$item->anduri_nimi}}</td>
    <td>{{$item->anduri_asukoht}}</td>
    <td>{{$item->anduri_temp}} </td> <br>
    <td>{{$item->anduri_aktiivsus}}</td>

</tr>

@endforeach




</table>
</div>
</body>
</html>