@vite(["resources/sass/app.scss","resources/js/app.js"])

<ul>
         
        
</ul>

@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset
<a href="{{ route('materias.create') }}" class="btn button btn-primary" id="btn-nuevo">Nuevo</a>

<div
class="table-responsive-md"
>
<table
    class="table table-primary"
>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Id Materia</th>
            <th scope="col">Nombre</th>
            <th scope="col">Nivel</th>
            <th scope="col">Nombre Mediano</th>
            <th scope="col">Nombre Corto</th>
            <th scope="col">Modalidad</th>
            <th scope="col">Reticula</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($materias as $materia)

        <tr class="">
            <td scope="row">{{$materia->id}}</td>
            <td>{{$materia->idmateria}}</td>
            <td>{{$materia->nombremateria}}</td>
            <td>{{$materia->nivel}}</td>
            <td>{{$materia->nombremediano}}</td>
            <td>{{$materia->nombrecorto}}</td>
            <td>{{$materia->modalidad}}</td>
            <td>{{$materia->reticula_id}}</td>
            <td><a href="{{route('materias.edit',$materia->id)}}" class="btn button btn-primary ">Editar</a></td>
            <td><a href="{{route('materias.show',$materia->id)}}" class="btn button btn-primary ">X</a></td>
            <td><a href="{{route('materias.show',$materia->id)}}" class="btn button btn-primary ">Ver</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>
{{$materias->links()}}
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
