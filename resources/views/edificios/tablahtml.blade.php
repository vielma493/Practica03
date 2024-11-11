@vite(["resources/sass/app.scss","resources/js/app.js"])

<ul>
         
        
</ul>

@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset
<a href="{{ route('edificios.create') }}" class="btn button btn-primary" id="btn-nuevo">Nuevo</a>

<div
class="table-responsive-md"
>
<table
    class="table table-primary"
>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre edificio</th>
            <th scope="col">Nombre Corto</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($edificios as $edificio)

        <tr class="">
            <td scope="row">{{$edificio->id}}</td>
            <td>{{$edificio->nombreedificio}}</td>
            <td>{{$edificio->nombrecorto}}</td>

            <td><a href="{{route('edificios.edit',$edificio->id)}}" class="btn button btn-primary ">Editar</a></td>
            <td><a href="{{route('edificios.show',$edificio->id)}}" class="btn button btn-primary ">X</a></td>
            <td><a href="{{route('edificios.show',$edificio->id)}}" class="btn button btn-primary ">Ver</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>
{{$edificios->links()}}
</div>

