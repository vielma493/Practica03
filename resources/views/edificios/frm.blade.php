@extends("plantillas/plantilla2")

@section("contenido1")
@include("edificios/tablahtml")
@endsection

@section("contenido2")

<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@if ($accion=='C')
<h1>Insertando</h1>
<form action="{{route('edificios.store')}}" method="POST">
  
  @elseif($accion=='E')
  <h1>Editando</h1>
  <form action="{{route('edificios.update',$edificio->id)}}" method="POST">

  @elseif($accion=='D')
  <h1>Eliminar</h1>

  <form action="{{route('edificios.destroy',$edificio->id)}}" method="post">
  @endif

    @csrf
    <div class="row mb-3">
      <label for="nombreedificio" class="col-sm-2 col-form-label">Nombre edificio: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreedificio" name="nombreedificio" value="{{old('nombreedificio',$edificio->nombreedificio)}}" {{$des}}>
        @error("nombreedificio")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>

      <label for="nombrecorto" class="col-sm-2 col-form-label">Nombre corto: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombrecorto" name="nombrecorto" value="{{old('nombrecorto',$edificio->nombrecorto)}}" {{$des}}>
        @error("nombrecorto")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
      
          
    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
  </form>

@endsection
