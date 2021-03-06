<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link href="{{asset('/css/main.css')}}" rel="stylesheet">
<body>
    <!--navbar-->
    <x-navbar/>
    <!--sidebar-->
    <div class="container-fluid">
    <x-sidebar/>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        @if(in_array("show.title", $user->privileges))
        <div class="container-fluid">
            <h2>Visualizar titulo</h2>
            <a href="{{route('title.edit',['title'=>$title['id']])}}"><button class="btn btn-primary">Editar</button></a>
            <br><br>
                <div class="row">
                    <div class="col-9">
                        <div class="mb-3">
                            <h4>Titulo</h4>
                            <p>{{$title['title']}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="mb-3">
                            <h4>Descripcion</h4>
                            <p>{{$title['description']}}<p>                        
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="mb-3">
                            <h4>Edicion</h4>
                            <p>{{$title['edition']}}<p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="mb-3">
                            <h4>Version</h4>
                            <p>{{$title['version']}}</p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-9">
                        <div class="mb-3">
                            <h4>Image</h4>
                            <img src="{{asset('storage/'.$title['image'])}}">
                        </div>
                    </div>
                </div>
            @if (!empty($games))
                <div class="row ">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Plataforma</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($games as $game)
                                <tr>
                                    <td>{{$game['platform']}}</td>
                                    <td>{{$game['user_name']}}</td>
                                    <td>{{$game['description']}}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Ofertar!</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table
                </div>
            @endif
        </div>
    @else
    <h3>Por favor hacer log in</h3>
    @endif

    </main>        


    </div>
    <!--scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>