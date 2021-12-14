<table class="table table-hover table-secondary">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Seleccionar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($inventario as $inventario)
            <tr>
                <td> {{ $inventario->nombre }} </td>
                <td> {{ $inventario->cantidad}} </td>
                <td> <button class="btn btn-secondary" id="ClienteSeleccionado">Seleccionar</button></td>
            </tr>
        @endforeach
       

    </tbody>
</table>
<ul>
    

</ul>
<script src="{{ asset('js/main.js') }}"></script>