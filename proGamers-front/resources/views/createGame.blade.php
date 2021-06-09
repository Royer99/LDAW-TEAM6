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
            <h3>Registro juego fisico</h3>
            <br><br>
            <form action='{{route('game.store')}}' enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <div class="col-9">
                        <div class="mb-3">
                            <label for="Titulo" class="form-label">Titulo</label>
                             <select class="form-control" id="title" name="title_id" required>
                                <option disable>selecciona una opcion</option>
                                @foreach($titles as $title)
                                    <option value="{{$title['id']}}">{{$title['title']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="mb-3">
                            <label for="Edicion" class="form-label">Plataforma</label>
                            <select class="form-control" id="title" name="platform_id" required>
                                <option disable>selecciona una opcion</option>
                                @foreach($platforms as $platform)
                                    <option value="{{$platform['id']}}">{{$platform['description']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="mb-3">
                            <label for="Version" class="form-label">description</label>
                            <input type="text" class="form-control" id="vesion" name="description" required>
                        </div>
                    </div>
                </div>
                <input readonly type="hidden" class="form-control" id="description" name="user_id" value="{{$user->id}}" >
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