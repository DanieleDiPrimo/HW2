<!DOCTYPE html> 

<html>
    <head>
        <title>IL TUO PROFILO</title>
        <script src = "{{asset('js/profilo.js')}}" defer = "true"></script>
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
            <div class = "titolo">
                IL TUO PROFILO
            </div>
            
            <ul class = "info">
                <li id = "nome"></li>
                <li id = cognome> </li>
                <li id = "email"></li>
                <li id = "username2"></li>
            </ul>

            <div id = "conteiner_img"></div>

        </main>

        @include('footer')  
    </body>
</html>
