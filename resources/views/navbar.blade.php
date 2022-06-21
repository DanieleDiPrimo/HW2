<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "{{asset('css/home.css')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
        <script src = "{{asset('js/navbar.js')}}" defer = "true"></script>
        <title>GamesLab</title>
    </head>

    <body>
      <header>
        <nav>
          <ul class="menu">
            
            <li><a href="/home">HOME</a></li>
            <li><a href="/profilo">PROFILO</a></li>
            <li><a href="/cerca_utente">CERCA UTENTE</a></li>
            <li><a href="/richieste">RICHIESTE</a></li>
            

          </ul>
        <div id="username"></div>
        <div id="logout"><a href="/logout">LOGOUT</a></div>

        </nav>
        <div id="sfondo">
        <div id="overlay"></div>
          <div class = "titolo">
              <h1>GameMeet</h1>
          </div>
        </div>
      </header>
    </body>
</html>

