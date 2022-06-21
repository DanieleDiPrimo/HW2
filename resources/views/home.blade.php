<!DOCTYPE html>

<html>
  <head>
    <title>
      HOMEPAGE
    </title>
    <script src = "{{asset('js/home.js')}}" defer = "true"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "{{asset('css/home.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <script src = "{{asset('js/navbar.js')}}" defer = "true"></script>
  </head>

  <body>
    @include('navbar')
    <main>
        <div class = "titolo" >QUALE GIOCO VUOI AGGIUNGERE AL TUO PROFILO? </div>
        <form method = "POST" class = "gameform">
          <label><input type="text" placeholder = "Inserisci il gioco qui" id = "gioco" name = "gioco"></label>
          <label><input type="submit" value = "Cerca"></label>
        </form>
        <div id = "gamenotfound"></div>
      </main>

      <section class="postview">
        
      </section>
    </main>

    @include('footer')  
  </body>
</html>
