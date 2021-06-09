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
    <!--form-->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="container-fluid">
            <h3>Registro Usuario</h3>
            <br><br>
            <form action='{{route('user.store')}}' enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <div class="col-9">
                        <div class="mb-3">
                            <label for="Nombres" class="form-label">Nombre(s)*</label>
                            <input type="text" class="form-control" id="description" name="name" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="mb-3">
                            <label for="Apellido_Paterno" class="form-label">Apellido Paterno*</label>
                            <input type="text" class="form-control" id="description" name="last_name" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="mb-3">
                            <label for="Apellido_Materno" class="form-label">Apellido Materno*</label>
                            <input type="text" class="form-control" id="description" name="last_name2" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="mb-3">
                            <label for="Celular" class="form-label">Celular*</label>
                            <input type="text" class="form-control" id="description" name="phone_number" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="mb-3">
                            <label for="E-mail" class="form-label">E-mail*</label>
                            <input type="text" class="form-control" id="description" name="email" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="mb-3">
                            <label for="Password" class="form-label">Password*</label>
                            <input type="password" class="form-control" id="description" name="password	" required>
                        </div>
                    </div>
                </div>
                
                <button id="next" class="btn btn-primary">registrar</button>
            </form>
        </div>
    </main>
    </div>
    <!--scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>