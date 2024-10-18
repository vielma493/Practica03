@extends("plantillas/plantilla2")

@section("contenido1")
@include("puestos/tablahtml")
@endsection


@section("contenido2")
<h1>Ver todos los datos</h1>
<form action="{{route('puestos.destroy',$puesto)}}" method="post">
    @csrf
    <div class="row mb-3">
      <label for="idpuesto" class="col-sm-2 col-form-label">ID Puesto: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idpuesto" name="idpuesto" disabled value="{{$puesto->idpuesto}}">
      </div>
      <div class="row mb-3">
        <label for="nombrePuesto" class="col-sm-2 col-form-label">Nombre Puesto: </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="nombrePuesto" name="nombrePuesto" disabled value="{{$puesto->nombrePuesto}}">
        </div>

        <div class="row mb-3">
            <label for="tipo" class="col-sm-2 col-form-label">Tipo: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="tipo" name="tipo" disabled value="{{$puesto->tipo}}">
            </div>
    <button type="submit" class="btn btn-primary">Confirma la eliminacion?</button>
    <a href="{{route('puestos.index')}}" class="btn btn-primary">Regresar</a>
  </form>

@endsection
