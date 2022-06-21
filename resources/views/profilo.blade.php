<!DOCTYPE html> 

<html>
    <head>
        <title>IL TUO PROFILO</title>
        <script src = "{{asset('js/profilo.js')}}" defer = "true"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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