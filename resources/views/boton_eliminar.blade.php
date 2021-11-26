<tr>
    <td>
        @foreach ($vuelo->pasajeros as $pasajero)
            {{ $vuelo->nombre }} - {{ $pasajero->nombre }}
            <form action="{{ route('relacion_eliminar', array($pasajero->id, $vuelo->id)) }}" method="POST">
                @csrf
                @method('delete')

                <button type="submit" class="boton_eliminar">
                    <p class="m-0">Eliminar</p>
                    <i class="far fa-trash-alt"></i>
                </button> 
            </form>
        @endforeach
    </td>
</tr>