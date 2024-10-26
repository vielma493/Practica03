@extends("plantillas/plantilla2")

@section("contenido1")
@include("puestos/tablahtml")
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
<form action="{{route('puestos.store')}}" method="POST">
  
  @elseif($accion=='E')
  <h1>Editando</h1>
  <form action="{{route('puestos.update',$puesto->id)}}" method="POST">

  @elseif($accion=='D')
  <h1>Eliminar</h1>

  <form action="{{route('puestos.destroy',$puesto->id)}}" method="post">
  @endif

    @csrf
    <div class="row mb-3">
      <label for="idpuesto" class="col-sm-2 col-form-label">Id puesto: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idpuesto" name="idpuesto" value="{{old('idpuesto',$puesto->idpuesto)}}" {{$des}}>
        @error("idpuesto")
                <p class="text-danger">Error en: {{$message}}</p>
              @enderror
      </div>
      <div class="row mb-3">
        <label for="nombrePuesto" class="col-sm-2 col-form-label">Nombre Puesto: </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="nombrePuesto" name="nombrePuesto" value="{{old('nombrePuesto',$puesto->nombrePuesto)}}" {{$des}}>
          @error("nombrePuesto")
                <p class="text-danger">Error en: {{$message}}</p>
              @enderror
        </div>

        <div class="row mb-3">
            <label for="tipo" class="col-sm-2 col-form-label">Tipo: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="tipo" name="tipo" value="{{old('tipo',$puesto->tipo)}}" {{$des}}>
              @error("tipo")
                <p class="text-danger">Error en: {{$message}}</p>
              @enderror
            </div>
    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
  </form>

@endsection
