@vite(["resources/sass/app.scss","resources/js/app.js"])

@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset

<a href="{{ route('plazas.create') }}" class="btn button btn-primary" id="btn-nuevo">Nuevo</a>

<div
class="table-responsive-md"
>
<table
    class="table table-primary"
>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID Plaza</th>
            <th scope="col">Nombre Plaza</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($plazas as $plaza)

        <tr class="">
            <td scope="row">{{$plaza->id}}</td>
            <td>{{$plaza->idplaza}}</td>
            <td>{{$plaza->nombrePlaza}}</td>
            <td><a href="{{route('plazas.edit',$plaza->id)}}" class="btn button btn-primary ">Editar</a></td>
            <td><a href="{{route('plazas.show',$plaza->id)}}" class="btn button btn-primary ">X</a></td>
            <td><a href="{{route('plazas.show',$plaza->id)}}" class="btn button btn-primary ">Ver</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>
{{$plazas->links()}}
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