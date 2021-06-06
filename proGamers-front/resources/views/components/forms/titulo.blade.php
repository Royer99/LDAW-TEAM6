<form action='{{route('title.store')}}' enctype="multipart/form-data" method="post">
    @csrf
    <div class="row">
        <div class="col-9">
            <div class="mb-3">
                <label for="Titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <div class="mb-3">
                <label for="Descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="description" name="description" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <div class="mb-3">
                <label for="Edicion" class="form-label">Edicion</label>
                <input type="text" class="form-control" id="edition" name="edition" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <div class="mb-3">
                <label for="Version" class="form-label">Version</label>
                <input type="text" class="form-control" id="vesion" name="version" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <div class="mb-3">
                <label for="Image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>
        </div>
    </div>
    
    <button id="next" class="btn btn-primary">registrar</button>
</form>