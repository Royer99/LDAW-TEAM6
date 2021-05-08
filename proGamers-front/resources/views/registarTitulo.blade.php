<html>
<meta>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</meta>
<body>
    <!--navbar-->

    <!--sidebar-->

    <!--form-->
    <form onsubmit="event.preventDefault();" >
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="description">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Edicion</label>
            <input type="text" class="form-control" id="edition">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Version</label>
            <input type="text" class="form-control" id="vesion">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Image</label>
            <input type="text" class="form-control" id="image">
        </div>
        <button id="next" class="btn btn-primary">registrar</button>
    </form>
    <!--scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="{{asset('/js/title.js')}}"></script>
</body>
</html>