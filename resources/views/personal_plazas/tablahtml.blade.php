@vite(["resources/sass/app.scss","resources/js/app.js"])

<ul>
         
        
</ul>

@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset
<a href="{{ route('personal_plazas.create') }}" class="btn button btn-primary" id="btn-nuevo">Nuevo</a>

<div
class="table-responsive-md"
>
<table
    class="table table-primary"
>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tipo Nombramiento</th>
            <th scope="col">Plaza</th>
            <th scope="col">Personal</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($personal_plazas as $personal_plaza)

        <tr class="">
            <td scope="row">{{$personal_plaza->id}}</td>
            <td>{{$personal_plaza->tiponombramiento}}</td>
            <td>{{$personal_plaza->plaza->nombrePlaza}}</td>
            <td>{{$personal_plaza->personal->nombres}} 
                {{$personal_plaza->personal->apellidop}}
                {{$personal_plaza->personal->apellidom}}
            </td>
            <td><a href="{{route('personal_plazas.edit',$personal_plaza->id)}}" class="btn button btn-primary ">Editar</a></td>
            <td><a href="{{route('personal_plazas.show',$personal_plaza->id)}}" class="btn button btn-primary ">X</a></td>
            <td><a href="{{route('personal_plazas.show',$personal_plaza->id)}}" class="btn button btn-primary ">Ver</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>
{{$personal_plazas->links()}}
</div>

