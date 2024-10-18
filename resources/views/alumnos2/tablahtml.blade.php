@vite(["resources/sass/app.scss","resources/js/app.js"])

<ul>
         
        
</ul>

@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset
<a href="{{ route('alumnos.create') }}" class="btn button btn-primary" id="btn-nuevo">Nuevo</a>

<div
class="table-responsive-md"
>
<table
    class="table table-primary"
>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Numero de control</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Email</th>
            <th scope="col">Sexo</th>
            <th scope="col">Carrera</th>
            <th scope="col">Departamento</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alumnos as $alumno)

        <tr class="">
            <td scope="row">{{$alumno->id}}</td>
            <td>{{$alumno->noctrl}}</td>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->apellidop}}</td>
            <td>{{$alumno->apellidom}}</td>
            <td>{{$alumno->email}}</td>
            <td>{{$alumno->sexo}}</td>
            <td>{{$alumno->carrera->nombrecarrera}}</td>
            <td>{{$alumno->carrera->depto->nombredepto}}</td>

            <td><a href="{{route('alumnos.edit',$alumno->id)}}" class="btn button btn-primary ">Editar</a></td>
            <td><a href="{{route('alumnos.show',$alumno->id)}}" class="btn button btn-primary ">X</a></td>
            <td><a href="{{route('alumnos.show',$alumno->id)}}" class="btn button btn-primary ">Ver</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>
{{$alumnos->links()}}
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
