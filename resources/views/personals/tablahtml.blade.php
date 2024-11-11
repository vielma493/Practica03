@vite(["resources/sass/app.scss","resources/js/app.js"])

<ul>
         
        
</ul>

@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset
<a href="{{route('personals.create')}}" class="btn button btn-primary">Nuevo</a>
<div
class="table-responsive-md"
>
<table
    class="table table-primary"
>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">RFC</th>

            <th scope="col">Nombres</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Licenciatura</th>
            <th scope="col">Titulo licenciatura</th>
            <th scope="col">Especializacion</th>
            <th scope="col">Titulo especializacion</th>
            <th scope="col">Maestria</th>
            <th scope="col">Titulo maestria</th>
            <th scope="col">Doctorado</th>
            <th scope="col">Titulo doctorado</th>
            <th scope="col">Fecha de ingreso a la SEP</th>
            <th scope="col">Fecha de ingreso a la institucion</th>
            <th scope="col">Departamento</th>
            <th scope="col">Puesto</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($personals as $personal)

        <tr class="">
            <td scope="row">{{$personal->id}}</td>
            <td>{{$personal->RFC}}</td>
            <td>{{$personal->nombres}}</td>
            <td>{{$personal->apellidop}}</td>
            <td>{{$personal->apellidom}}</td>
            <td>{{$personal->licenciatura}}</td>
            <td>{{$personal->lictit}}</td>
            <td>{{$personal->especializacion}}</td>
            <td>{{$personal->esptit}}</td>
            <td>{{$personal->maestria}}</td>
            <td>{{$personal->maetit}}</td>
            <td>{{$personal->doctorado}}</td>
            <td>{{$personal->doctit}}</td>
            <td>{{$personal->fechaingsep}}</td>
            <td>{{$personal->fechaingins}}</td>
            <td>{{$personal->depto->nombredepto}}</td>
            <td>{{$personal->puesto->nombrePuesto}}</td>

            <td><a href="{{route('personals.edit',$personal->id)}}" class="btn button btn-primary ">Editar</a></td>
            <td><a href="{{route('personals.show',$personal->id)}}" class="btn button btn-primary ">X</a></td>
            <td><a href="{{route('personals.show',$personal->id)}}" class="btn button btn-primary ">Ver</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>
{{$personals->links()}}
</div>


