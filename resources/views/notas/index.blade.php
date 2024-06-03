<div class="container">
    <h2 class="my-4">Notas</h2>
    @if($notas->isEmpty())
        <div class="alert alert-warning" role="alert">
            No tienes notas ingresadas.
        </div>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Curso</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Nota 3</th>
                    <th>Nota 4</th>
                    <th>Nota 5</th>
                    <th>Promedio</th>
                    <th>Fecha de Creación</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notas as $nota)
                    <tr>
                        <td>{{ $nota->id }}</td>
                        <td>{{ $nota->curso }}</td>
                        <td>{{ $nota->nota1 }}</td>
                        <td>{{ $nota->nota2 }}</td>
                        <td>{{ $nota->nota3 }}</td>
                        <td>{{ $nota->nota4 }}</td>
                        <td>{{ $nota->nota5 }}</td>
                        <td>{{ $nota->promedio }}</td>
                        <td>{{ $nota->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
