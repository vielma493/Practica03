@vite(["resources/sass/app.scss","resources/js/app.js"])

<ul>
         
        
</ul>

@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset
<a href="{{ route('deptos.create') }}" class="btn button btn-primary" id="btn-nuevo">Nuevo</a>

<div
class="table-responsive-md"
>
<table
    class="table table-primary"
>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Id Depto</th>
            <th scope="col">Nombre</th>
            <th scope="col">Nombre mediano</th>
            <th scope="col">Nombre corto</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($deptos as $depto)

        <tr class="">
            <td scope="row">{{$depto->id}}</td>
            <td>{{$depto->iddepto}}</td>
            <td>{{$depto->nombredepto}}</td>
            <td>{{$depto->nombremediano}}</td>
            <td>{{$depto->nombrecorto}}</td>

            <td><a href="{{route('deptos.edit',$depto->id)}}" class="btn button btn-primary ">Editar</a></td>
            <td><a href="{{route('deptos.show',$depto->id)}}" class="btn button btn-primary ">X</a></td>
            <td><a href="{{route('deptos.show',$depto->id)}}" class="btn button btn-primary ">Ver</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>
{{$deptos->links()}}
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
