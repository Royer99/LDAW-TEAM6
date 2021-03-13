<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>LDAW TEAM 6</title>
        
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            

    </head>
    <body>

        <nav>
            <div class="nav-wrapper">
                <a href="/" class="brand-logo right">Main</a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="/teammates/A01265529">Royer Donnet</a></li>
                    <li><a href="/teammates/A01420666">Luis Jesus</a></li>
                    <li><a href="/teammates/A01209929">Jorge Sánchez</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h1>Miembro de equipo LDAW6</h1>

            <h3><?php echo $mate["name"]; ?></h3>

            <h3><?php echo $mate["matricula"]; ?></h3>

            <blockquote>
                <?php echo $mate["descripcion"]; ?>
            </blockquote>
            <div class="container">
                <img class="responsive-img" src="<?php echo $mate["photoDir"] ?>">
            </div>
        </div>
        <footer class="page-footer">
        </footer>
    </body>
</html>
