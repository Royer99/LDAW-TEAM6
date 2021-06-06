<form action='{{route('title.store')}}' method="post">
    <div class="row">
        <div class="col-9">
            <div class="mb-3">
                <label for="Titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <div class="mb-3">
                <label for="Descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <div class="mb-3">
                <label for="Edicion" class="form-label">Edicion</label>
                <input type="text" class="form-control" id="edition" name="edition">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <div class="mb-3">
                <label for="Version" class="form-label">Version</label>
                <input type="text" class="form-control" id="vesion" name="version">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <div class="mb-3">
                <label for="Image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
        </div>
    </div>
    
    <button id="next" class="btn btn-primary">registrar</button>
</form>