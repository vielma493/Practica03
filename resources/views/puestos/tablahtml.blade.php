@vite(["resources/sass/app.scss","resources/js/app.js"])

<ul>
         
        
</ul>
<a href="{{route('puestos.create')}}" class="btn button btn-primary">Nuevo</a>
<div
class="table-responsive-md"
>
<table
    class="table table-primary"
>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID Puesto</th>
            <th scope="col">Nombre Puesto</th>
            <th scope="col">Tipo</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($puestos as $puesto)

        <tr class="">
            <td scope="row">{{$puesto->id}}</td>
            <td>{{$puesto->idpuesto}}</td>
            <td>{{$puesto->nombrePuesto}}</td>
            <td>{{$puesto->tipo}}</td>
            <td><a href="{{route('puestos.edit',$puesto->id)}}" class="btn button btn-primary ">Editar</a></td>
            <td><a href="{{route('puestos.show',$puesto->id)}}" class="btn button btn-primary ">X</a></td>
            <td><a href="{{route('puestos.show',$puesto->id)}}" class="btn button btn-primary ">Ver</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>
{{$puestos->links()}}
</div>