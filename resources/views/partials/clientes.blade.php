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
                <td> <button type="button" class="seleccioncliente btn btn-primary" data-bs-dismiss="modal" >Seleccionar</button></td>
            </tr>
        @endforeach

    </tbody>
</table>
<script> 
    
    function seleccioncliente(){

        var seleccioncliente = hola;

        alert('seleccioncliente')


    }
    
</script>
