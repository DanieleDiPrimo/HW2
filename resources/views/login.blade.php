<html>
    <head>
    <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
    <link rel = "stylesheet" href = "{{asset('css/file_nonmio.css')}}" >
    <title>LOGIN</title>
    </head>
    <body>
       
        <main>
          
          <div class="body-content">
          <div class="module">
          <h1>|LOGIN|</h1>
          <form class="form" method="post">
          {{ csrf_field() }}
          <div class="alert alert-error"></div>
          <label><input type="text" placeholder="Username" name="username"  /></label>
          <label><input type="password" placeholder="Password" name="password"  /></label>
          <label><input type="submit" value="Accedi" name="accedi" class="btn btn-block btn-primary" /></label>
          </form>
          <div class="b_registrati">Non hai un account? <a href="/registrazione">REGISTRATI</a></div>
          </div>
         
        </main>
        

        
    </body>
</html> 

