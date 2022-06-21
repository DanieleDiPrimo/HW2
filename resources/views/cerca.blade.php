<!DOCTYPE html> 

<html>
    <head>
        <title>CERCA UTENTE</title>
        <link rel ="stylesheet" href = "{{asset('css/home.css')}}"></link>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
        <script src="{{asset('js/cerca_persone.js')}}" defer = "true"></script>
    </head>

    <body>

        @include('navbar')

        <main>
        <div class = "titolo" >CERCA QUI I TUOI AMICI! </div>
        <form method = "POST" class = "cerca_profilo">
        <label><input type="text" placeholder = "Username utente" id= "persona" name = "utente_da_cercare"></label>
        <label><input type="submit" value = "Cerca"></label>
        </form>

        <div class = "banner"></div>

    </main>
    <section class="postview">
        
    </section>

    @include('footer')    

    </body>
</html>