@vite(["resources/sass/app.scss","resources/js/app.js"])

<ul>
         
        
</ul>
<a href="{{route('reticulas.create')}}" class="btn button btn-primary">Nuevo</a>
<div
class="table-responsive-md"
>
<table
    class="table table-primary"
>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID Reticula</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Fecha en vigor</th>
            <th scope="col">Carrera</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reticulas as $reticula)

        <tr class="">
            <td scope="row">{{$reticula->id}}</td>
            <td>{{$reticula->idreticula}}</td>
            <td>{{$reticula->descripcion}}</td>
            <td>{{$reticula->fechaenvigor}}</td>
            <td>{{$reticula->carrera->nombrecarrera}}</td>
            <td><a href="{{route('reticulas.edit',$reticula->id)}}" class="btn button btn-primary ">Editar</a></td>
            <td><a href="{{route('reticulas.show',$reticula->id)}}" class="btn button btn-primary ">X</a></td>
            <td><a href="{{route('reticulas.show',$reticula->id)}}" class="btn button btn-primary ">Ver</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>
{{$reticulas->links()}}
</div>