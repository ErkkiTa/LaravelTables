
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<h1>Kaamerad</h1>
<form class="otsing" action="/action_page.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Otsi kaamerat.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

<h2>Kõige levinumad kaamerad</h2>

<div class="container">

    <div class="row">
        <div class="box1"><iframe src="https://g2.ipcamlive.com/player/player.php?alias=5e0f764970dff&autoplay=1" frameborder="0" scrolling="no" width="500px" height="300px"></iframe></div>
        <div class="box2"><iframe src="https://g2.ipcamlive.com/player/player.php?alias=5ddab40795152&autoplay=1" frameborder="0" scrolling="no" width="500px" height="300px"></iframe></div>    
    </div>
    <div class="row">
        <div class="box3"><iframe src="https://g2.ipcamlive.com/player/player.php?alias=5ddaba5695d31&autoplay=1" frameborder="0" scrolling="no" width="500px" height="300px"></iframe></div>
        <div class="box4"><iframe src="https://g2.ipcamlive.com/player/player.php?alias=5de00341d5a32&autoplay=1" frameborder="0" scrolling="no" width="500px" height="300px"></iframe></div>
    </div>

</div>

<div class="clear"></div>

</body>
</html>