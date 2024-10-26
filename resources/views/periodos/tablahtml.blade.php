@vite(["resources/sass/app.scss","resources/js/app.js"])

<ul>
         
        
</ul>

@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset
<a href="{{ route('periodos.create') }}" class="btn button btn-primary" id="btn-nuevo">Nuevo</a>

<div
class="table-responsive-md"
>
<table
    class="table table-primary"
>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Id Periodo</th>
            <th scope="col">Periodo</th>
            <th scope="col">Descripcion corta</th>
            <th scope="col">Fecha de Inicio</th>
            <th scope="col">Fecha de Fin</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($periodos as $periodo)

        <tr class="">
            <td scope="row">{{$periodo->id}}</td>
            <td>{{$periodo->idperiodo}}</td>
            <td>{{$periodo->periodo}}</td>
            <td>{{$periodo->desccorta}}</td>
            <td>{{$periodo->fechaini}}</td>
            <td>{{$periodo->fechafin}}</td>

            <td><a href="{{route('periodos.edit',$periodo->id)}}" class="btn button btn-primary ">Editar</a></td>
            <td><a href="{{route('periodos.show',$periodo->id)}}" class="btn button btn-primary ">X</a></td>
            <td><a href="{{route('periodos.show',$periodo->id)}}" class="btn button btn-primary ">Ver</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>
{{$periodos->links()}}
</div>
<script>
    $(document).on('click', '#btn-nuevo', function (e) {
    e.preventDefault(); // Prevenir la redirección del enlace

    var url = $(this).attr('href'); // Obtener la URL del botón "Nuevo"

    $.ajax({
        url: url,
        method: 'GET',
        success: function (data) {
            // Cargar el contenido del formulario en el div #dynamic-content
            $('#dynamic-content').html(data);
        },
        error: function () {
            alert('Ocurrió un error al cargar el formulario.');
        }
    });
});
</script>
