@vite(["resources/sass/app.scss","resources/js/app.js"])

<ul>
         
        
</ul>

@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset
<a href="{{ route('grupoHorarios21359.create') }}" class="btn button btn-primary" id="btn-nuevo">Nuevo</a>

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
            <th scope="col">Lugar</th>
            <th scope="col">Dia</th>
            <th scope="col">Hora</th>

            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($grupoHorarios21359 as $grupoHorario21359)

        <tr class="">
            <td scope="row">{{$grupoHorario21359->id}}</td>
            <td>{{$grupoHorario21359->grupo21359->grupo}}</td>
            <td>{{$grupoHorario21359->lugar->nombrelugar}}</td>
            <td>{{$grupoHorario21359->dia}}</td>
            <td>{{$grupoHorario21359->hora}}</td>

            <td><a href="{{route('grupoHorarios21359.edit',$grupoHorario21359->id)}}" class="btn button btn-primary ">Editar</a></td>
            <td><a href="{{route('grupoHorarios21359.show',$grupoHorario21359->id)}}" class="btn button btn-primary ">X</a></td>
            <td><a href="{{route('grupoHorarios21359.show',$grupoHorario21359->id)}}" class="btn button btn-primary ">Ver</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>
{{$grupoHorarios21359->links()}}
</div>

