@extends("plantillas/plantilla2")

@section("contenido1")
@include("deptos/tablahtml")
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
<form action="{{route('deptos.store')}}" method="POST">
  
  @elseif($accion=='E')
  <h1>Editando</h1>
  <form action="{{route('deptos.update',$depto->id)}}" method="POST">

  @elseif($accion=='D')
  <h1>Eliminar</h1>

  <form action="{{route('deptos.destroy',$depto->id)}}" method="post">
  @endif

    @csrf
    <div class="row mb-3">
      <label for="iddepto" class="col-sm-2 col-form-label">Id Depto: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="iddepto" name="iddepto" value="{{old('iddepto',$depto->iddepto)}}" {{$des}}>
        @error("iddepto")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>

      <label for="nombredepto" class="col-sm-2 col-form-label">Nombre departamento: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombredepto" name="nombredepto" value="{{old('nombredepto',$depto->nombredepto)}}" {{$des}}>
        @error("nombredepto")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
      <div class="row mb-3">
        <label for="nombremediano" class="col-sm-2 col-form-label">Nombre mediano: </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="nombremediano" name="nombremediano" value="{{old('nombremediano',$carrera->nombremediano)}}" {{$des}}>
          @error("nombremediano")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
        </div>
        <div class="row mb-3">
          <label for="nombrecorto" class="col-sm-2 col-form-label">Nombre Corto: </label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="nombrecorto" name="nombrecorto" value="{{old('nombrecorto',$carrera->nombrecorto)}}" {{$des}}>
            @error("nombrecorto")
            <p class="text-danger">Error en: {{$message}}</p>
          @enderror
          </div>
          
    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
  </form>

@endsection
