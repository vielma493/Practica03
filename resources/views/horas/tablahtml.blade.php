@vite(["resources/sass/app.scss","resources/js/app.js"])

<ul>
         
        
</ul>

@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset
<a href="{{ route('horas.create') }}" class="btn button btn-primary" id="btn-nuevo">Nuevo</a>

<div
class="table-responsive-md"
>
<table
    class="table table-primary"
>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Hora inicio</th>
            <th scope="col">Hora fin</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($horas as $hora)

        <tr class="">
            <td scope="row">{{$hora->id}}</td>
            <td>{{$hora->hora_ini}}</td>
            <td>{{$hora->hora_fin}}</td>

            <td><a href="{{route('horas.edit',$hora->id)}}" class="btn button btn-primary ">Editar</a></td>
            <td><a href="{{route('horas.show',$hora->id)}}" class="btn button btn-primary ">X</a></td>
            <td><a href="{{route('horas.show',$hora->id)}}" class="btn button btn-primary ">Ver</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>
{{$horas->links()}}
</div>

