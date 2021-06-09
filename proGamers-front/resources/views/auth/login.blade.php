<html>
<meta>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link href="{{asset('/css/main.css')}}" rel="stylesheet">
<body>
<!--navbar-->
<x-navbar/>
<div class="container-fluid">
    <x-sidebar/>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="container-fluid">

@if ($errors->any())

        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach

    @endif

    <form class="" method="post" action="{{route("login")}}" >

        @csrf

        <div class="form-row justify-content-center">

            <div class="col-auto">

                <div class="form-group">

                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" />

                </div>

                <div class="form-group">

                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" />

                </div>

                <br>

                <div class="form-group">

                    <button type="submit" class="btn btn-primary">Entrar</button>

                </div>

            </div>

        </div>


    </form>

    </div>
</main>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>
