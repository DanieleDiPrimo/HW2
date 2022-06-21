<!DOCTYPE html> 

<html>
    <head>
        <title>IL TUO PROFILO</title>
        <script src = "{{asset('js/profilo.js')}}" defer = "true"></script>
        <link rel = "stylesheet" href = "{{asset('css/home.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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