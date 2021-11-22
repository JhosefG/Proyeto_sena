<table class="table table-hover table-secondary">
    <thead>
        <tr>
            <th>Numero de documento</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Seleccionar</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($clientes as $clientes)
            <tr>
                <td> {{ $clientes->id }} </td>
                <td> {{ $clientes->nombre}} </td>
                <td> {{ $clientes->apellidos}} </td>
                <td></td>
            </tr>
            @endforeach

    </tbody>
</table>
    