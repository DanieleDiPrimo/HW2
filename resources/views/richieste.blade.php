<!DOCTYPE html>

<html>
    <head>
        <title>LE TUE RICHIESTE</title>
        <script src = "{{asset('js/richieste.js')}}"></script>
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
            <h1 class="titolo">LE TUE RICHIESTE</h1>
            <div class='banner'></div>
    

            <section class = "griglia">
            <ul class ="info">
               
            </ul>
            </section>
        </main>

    
    </body>  
    @include('footer')  
</html>
