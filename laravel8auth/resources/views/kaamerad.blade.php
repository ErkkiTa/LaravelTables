
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="/"> <img src="{{asset('img/etr.png')}}" width="100" height="40" class="d-inline-block align-top"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/rada">Rajad</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/kaamerad">Kaamerad</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/andurid">Andurid</a>
      </li>
    </ul>  
  </div>
</nav>


<header>
  <h2>Kõige levinumad kaamerad</h2>
</header>
<main class="withSidebar">
  <form class="sidebar otsing" action="/action_page.php">
    <input type="text" placeholder="Otsi kaamerat.." name="search2">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
  <section class="content">
    <iframe class="kaamera-4" src="https://g2.ipcamlive.com/player/player.php?alias=5e0f764970dff&autoplay=1" frameborder="0" scrolling="no"></iframe>
    <iframe class="kaamera-4" src="https://g2.ipcamlive.com/player/player.php?alias=5ddab40795152&autoplay=1" frameborder="0" scrolling="no"></iframe>
    <iframe class="kaamera-4" src="https://g2.ipcamlive.com/player/player.php?alias=5ddaba5695d31&autoplay=1" frameborder="0" scrolling="no"></iframe>
    <iframe class="kaamera-4" src="https://g2.ipcamlive.com/player/player.php?alias=5de00341d5a32&autoplay=1" frameborder="0" scrolling="no"></iframe>
  </section>

<div class="clear"></div>

</body>
</html>