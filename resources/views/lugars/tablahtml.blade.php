@vite(["resources/sass/app.scss","resources/js/app.js"])

<ul>
         
        
</ul>

@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset
<a href="{{ route('lugars.create') }}" class="btn button btn-primary" id="btn-nuevo">Nuevo</a>

<div
class="table-responsive-md"
>
<table
    class="table table-primary"
>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre lugar</th>
            <th scope="col">Nombre Corto</th>
            <th scope="col">Nombre Edificio</th>

            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lugars as $lugar)

        <tr class="">
            <td scope="row">{{$lugar->id}}</td>
            <td>{{$lugar->nombrelugar}}</td>
            <td>{{$lugar->nombrecorto}}</td>
            <td>{{$lugar->edificio_id}}</td>

            <td><a href="{{route('lugars.edit',$lugar->id)}}" class="btn button btn-primary ">Editar</a></td>
            <td><a href="{{route('lugars.show',$lugar->id)}}" class="btn button btn-primary ">X</a></td>
            <td><a href="{{route('lugars.show',$lugar->id)}}" class="btn button btn-primary ">Ver</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>
{{$lugars->links()}}
</div>

