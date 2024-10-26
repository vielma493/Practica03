@vite(["resources/sass/app.scss","resources/js/app.js"])

<ul>
         
        
</ul>

@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset
<a href="{{ route('carreras.create') }}" class="btn button btn-primary" id="btn-nuevo">Nuevo</a>

<div
class="table-responsive-md"
>
<table
    class="table table-primary"
>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Id Carrera</th>
            <th scope="col">Nombre</th>
            <th scope="col">Nombre mediano</th>
            <th scope="col">Nombre corto</th>
            <th scope="col">Departamento</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($carreras as $carrera)

        <tr class="">
            <td scope="row">{{$carrera->id}}</td>
            <td>{{$carrera->idcarrera}}</td>
            <td>{{$carrera->nombrecarrera}}</td>
            <td>{{$carrera->nombremediano}}</td>
            <td>{{$carrera->nombrecorto}}</td>
            <td>{{$carrera->depto->nombredepto}}</td>

            <td><a href="{{route('carreras.edit',$carrera->id)}}" class="btn button btn-primary ">Editar</a></td>
            <td><a href="{{route('carreras.show',$carrera->id)}}" class="btn button btn-primary ">X</a></td>
            <td><a href="{{route('carreras.show',$carrera->id)}}" class="btn button btn-primary ">Ver</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>
{{$carreras->links()}}
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
