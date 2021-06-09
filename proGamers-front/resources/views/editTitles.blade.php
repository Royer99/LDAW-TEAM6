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
            <h2>Visualizar/Editar Titulo</h2>
            <br><br>
            <!--form-->
            <form action='{{route('title.update',['title'=>$title['id']])}}' enctype="multipart/form-data" method="post">
                {{ method_field('PATCH') }}
                @csrf
                <div class="row">
                    <div class="col-9">
                        <div class="mb-3">
                            <label for="Titulo" class="form-label">Titulo</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$title['title']}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="mb-3">
                            <label for="Descripcion" class="form-label">Descripcion</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{$title['description']}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="mb-3">
                            <label for="Edicion" class="form-label">Edicion</label>
                            <input type="text" class="form-control" id="edition" name="edition" value="{{$title['edition']}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="mb-3">
                            <label for="Version" class="form-label">Version</label>
                            <input type="text" class="form-control" id="version" name="version" value="{{$title['version']}}" required>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-9">
                        <div class="mb-3">
                            <label for="Image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" value='{{$title['image']}}' required>
                        </div>
                    </div>
                    <a href="{{asset('storage/'.$title['image'])}}">Descarga</a>
                </div>
                <div class="row invisible">
                    <div class="col-9">
                        <div class="mb-3">
                            <label for="Image" class="form-label">Image path</label>
                            <input readonly type="text" class="form-control" id="imagepath" name="originalPath" value="{{$title['image']}}" required>
                        </div>
                    </div>
                </div>
                <button id="next" class="btn btn-primary">Cancelar</button>
                <button id="next" class="btn btn-primary">registrar</button>
            </form>
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