@extends("plantillas/plantilla2")

@section("contenido1")
@include("carreras/tablahtml")
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
<form action="{{route('carreras.store')}}" method="POST">
  
  @elseif($accion=='E')
  <h1>Editando</h1>
  <form action="{{route('carreras.update',$carrera->id)}}" method="POST">

  @elseif($accion=='D')
  <h1>Eliminar</h1>

  <form action="{{route('carreras.destroy',$carrera->id)}}" method="post">
  @endif

    @csrf
    <div class="row mb-3">
      <label for="idcarrera" class="col-sm-2 col-form-label">Id Carrera: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idcarrera" name="idcarrera" value="{{old('idcarrera',$carrera->idcarrera)}}" {{$des}}>
        @error("idcarrera")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>

      <label for="nombrecarrera" class="col-sm-2 col-form-label">Nombre Carrera: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombrecarrera" name="nombrecarrera" value="{{old('nombrecarrera',$carrera->nombrecarrera)}}" {{$des}}>
        @error("nombrecarrera")
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

        <div class="row mb-3">
            <label for="depto_id" class="col-sm-2 col-form-label">Departamento: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="depto_id" name="depto_id" value="{{old('depto_id',$carrera->depto_id)}}" {{$des}}>
              @error("depto_id")
              <p class="text-danger">Error en: {{$message}}</p>
            @enderror
            </div>
    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
  </form>

@endsection
