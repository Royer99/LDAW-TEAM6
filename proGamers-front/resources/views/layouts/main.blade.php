<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>@yield('pageTitle')</title>

        <!--
        ***********************************
                        CSS
        ***********************************
        -->

        <!-- Bootstrap --->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ url('css/main.css') }}" />
        @stack('styles')

    </head>

    <body>

        <header class="container-fluid">
            <h1>Mini Aplicación para Biblioteca</h1>
        </header>
        
        <main class="container-fluid">
            @yield('mainContent')
        </main>

        <footer class="container-fluid">

            <p>TEAM 6 - LDAW Febrero - 2021</p>

        </footer>

                <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        @stack('scripts')

    </body>
</html>
