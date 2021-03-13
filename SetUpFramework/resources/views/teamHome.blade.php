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
        <h1>The 6ix</h1>

            <?php foreach($mateList as $mate){ ?>

                
                 <div class="row">
                    <div class="col s12 m8">
                        <div class="card small">
                            <a href="<?php echo url("/teammates/". $mate["matricula"]); ?>"><div class="card-image">
                                <img src="<?php echo $mate["photoDir"] ?>">
                            </div></a>
                            <div class="card-content">
                                <h5><?php echo $mate["name"]; ?> - <?php echo $mate["matricula"]; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
        <footer class="page-footer">
        </footer>            
    </body>
</html>
