<!DOCTYPE html>

<html>
  <head>
    <title>
      HOMEPAGE
    </title>
    <script src = "{{asset('js/home.js')}}" defer = "true"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
