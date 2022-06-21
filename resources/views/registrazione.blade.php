
<html>
    <head>
        <link rel = "stylesheet" href = "{{asset('css/file_nonmio.css')}}" >
        <title>Registrazione</title>
        <script src="{{asset('js/check_registrazione.js')}}" defer = "true"></script>
        <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <?php
    ?>
        <main>

          <div class="body-content">
          <div class="module">
          <h1>Crea il tuo account</h1>
          <form name = "form_reg" method="post">
          {{ csrf_field() }}
          <label><input class ="nome" type="text" placeholder="Nome" name="nome"  /></label>
          <label><input class = "cognome" type="text" placeholder="Cognome" name="cognome" /></label>
          <label><input class = "email" type="email" placeholder="Email" name="email"  /></label>
          <label><input class = "username" type="text" placeholder="Username" name="username"  /></label>
          <label><input class = "password" type="password" placeholder="Password" name="password"  /></label>
          <div class="avatar"><label>LINK della tua immagine del profilo </label><input type="text" name="avatar"/></div>
          <input type="submit" value="Registrati" name="registrati" class="btn btn-block btn-primary" />
          </form>
          <div class="b_registrazione">Hai già un account? <a href="/login">LOGIN</a></div>
          </div>
    
          <div id ="errore"></div>

        </main>
    </body>
</html>



