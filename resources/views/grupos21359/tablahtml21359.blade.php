@vite(["resources/sass/app.scss","resources/js/app.js"])

<ul>
         
        
</ul>

@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset
<a href="{{ route('grupos21359.create') }}" class="btn button btn-primary" id="btn-nuevo">Nuevo</a>

<div
class="table-responsive-md"
>
<table
    class="table table-primary"
>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Grupo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Max_alumnos</th>
            <th scope="col">Periodo</th>
            <th scope="col">Materia</th>
            <th scope="col">Personal</th>

            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($grupos21359 as $grupo21359)

        <tr class="">
            <td scope="row">{{$grupo21359->id}}</td>
            <td>{{$grupo21359->grupo}}</td>
            <td>{{$grupo21359->descripcion}}</td>
            <td>{{$grupo21359->max_alumnos}}</td>
            <td>{{$grupo21359->periodo->periodo}}</td>
            <td>{{$grupo21359->materiaAbierta->materia->nombremateria ?? 'N/A'}}</td>
            <td>
                {{ $grupo21359->personal->nombres ?? 'N/A' }}
                {{ $grupo21359->personal->apellidop ?? '' }}
                {{ $grupo21359->personal->apellidom ?? '' }}
            </td>


            <td><a href="{{route('grupos21359.edit',$grupo21359->id)}}" class="btn button btn-primary ">Editar</a></td>
            <td><a href="{{route('grupos21359.show',$grupo21359->id)}}" class="btn button btn-primary ">X</a></td>
            <td><a href="{{route('grupos21359.show',$grupo21359->id)}}" class="btn button btn-primary ">Ver</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>
{{$grupos21359->links()}}
</div>

