@vite(["resources/sass/app.scss","resources/js/app.js"])

<ul>
         
        
</ul>

@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset
<a href="{{route('alumnos.create')}}" class="btn button btn-primary">Nuevo</a>
<div
class="table-responsive-md"
>
<table
    class="table table-primary"
>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Numero de control</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Numero de control</th>
            
            <th scope="col">Email</th>
            <th scope="col">Sexo</th>
            <th scope="col">Carrera</th>
            <th scope="col">Departamento</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alumnos as $alumno)

        <tr class="">
            <td scope="row">{{$alumno->id}}</td>
            <td>{{$alumno->noctrl}}</td>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->apellidop}}</td>
            <td>{{$alumno->apellidom}}</td>
            <td>{{$alumno->email}}</td>
            <td>{{$alumno->sexo}}</td>
            <td>{{$alumno->carrera->nombrecarrera}}</td>
            <td>{{$alumno->carrera->depto->nombredepto}}</td>

            <td><a href="{{route('alumnos.edit',$alumno->id)}}" class="btn button btn-primary ">Editar</a></td>
            <td><a href="{{route('alumnos.show',$alumno->id)}}" class="btn button btn-primary ">X</a></td>
            <td><a href="{{route('alumnos.show',$alumno->id)}}" class="btn button btn-primary ">Ver</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>
{{$alumnos->links()}}
</div>


<ul>
    @foreach ($deptos as $depto)
        <li>{{$depto->nombredepto}}</li>
    
    <ul>
        @foreach ($depto->carreras as $carrera)
        <li>{{$carrera->nombrecarrera}}</li>
        <ul>
            @foreach ($carrera->alumnos as $alumno)
                <li>{{$alumno->nombre}}</li>

            @endforeach
        </ul>
            
        @endforeach
    </ul>
    @endforeach
</ul>

<ul>
    <div class="contaner">
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
<form action="{{route('alumnos.index')}}" method="get">
    <select name="iddepto" onchange="this.form.submit">
        @foreach ($deptos as $depto)
        <option value="{{$depto->iddepto}}">{{$depto->nombredepto}}</option>
        @endforeach
    </select>
    <select name="idcarrera" id="idcarrera">
        <option value="0">Selecciona la carrera</option>
        @if (request("depto_id") !==null)
        @foreach ($deptos->find(request('iddepto'))->carreras as $carrera)
        <option value="{{$carrera->id}}">{{ $carrera->nombrecarrera}}</option>
        @endforeach
@endif
    </select>
    <button>VER</button>
</form>
        </div>
    </div>
</ul>

<script>

    document.getElementById("iddepto").value={{request('iddepto')}};

</script>