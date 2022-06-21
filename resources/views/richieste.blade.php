<!DOCTYPE html>

<html>
    <head>
        <title>LE TUE RICHIESTE</title>
        <link rel = "stylesheet" href = "{{asset('css/home.css')}}" >
        <script src = "{{asset('js/richieste.js')}}"></script>
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