<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Agregar Notas</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('notas.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="curso" class="form-label">Curso</label>
                    <input type="text" name="curso" id="curso" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="nota1" class="form-label">Nota 1</label>
                    <input type="number" name="nota1" id="nota1" class="form-control" required min="0" max="20">
                </div>
                <div class="mb-3">
                    <label for="nota2" class="form-label">Nota 2</label>
                    <input type="number" name="nota2" id="nota2" class="form-control" required min="0" max="20">
                </div>
                <div class="mb-3">
                    <label for="nota3" class="form-label">Nota 3</label>
                    <input type="number" name="nota3" id="nota3" class="form-control" required min="0" max="20">
                </div>
                <div class="mb-3">
                    <label for="nota4" class="form-label">Nota 4</label>
                    <input type="number" name="nota4" id="nota4" class="form-control" required min="0" max="20">
                </div>
                <div class="mb-3">
                    <label for="nota5" class="form-label">Nota 5</label>
                    <input type="number" name="nota5" id="nota5" class="form-control" required min="0" max="20">
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-success">Guardar Notas</button>
                </div>
            </form>
        </div>
    </div>
</div>
