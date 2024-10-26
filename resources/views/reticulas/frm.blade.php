@extends("plantillas/plantilla2")

@section("contenido1")
@include("reticulas/tablahtml")
@endsection


@section("contenido2")


@if ($accion=='C')
<h1>Insertando</h1>
<form action="{{route('reticulas.store')}}" method="POST">
  
  @elseif($accion=='E')
  <h1>Editando</h1>
  <form action="{{route('reticulas.update',$reticula->id)}}" method="POST">

  @elseif($accion=='D')
  <h1>Eliminar</h1>

  <form action="{{route('reticulas.destroy',$reticula->id)}}" method="post">
  @endif

    @csrf
    <div class="row mb-3">
      <label for="idreticula" class="col-sm-2 col-form-label">Id reticula: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idreticula" name="idreticula" value="{{old('idreticula',$reticula->idreticula)}}" {{$des}}>
        @error("idreticula")
                <p class="text-danger">Error en: {{$message}}</p>
              @enderror
      </div>
      <div class="row mb-3">
        <label for="descripcion" class="col-sm-2 col-form-label">Descripcion: </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{old('descripcion',$reticula->descripcion)}}" {{$des}}>
          @error("descripcion")
                <p class="text-danger">Error en: {{$message}}</p>
              @enderror
        </div>

        <div class="row mb-3">
            <label for="fechaenvigor" class="col-sm-2 col-form-label">Fecha en vigor: </label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="fechaenvigor" name="fechaenvigor" value="{{old('fechaenvigor',$reticula->fechaenvigor)}}" {{$des}}>
              @error("fechaenvigor")
                <p class="text-danger">Error en: {{$message}}</p>
              @enderror
            </div>


            <div class="row mb-3">
              <label for="carrera_id" class="col-sm-2 col-form-label">Carrera: </label>
              <div class="col-sm-9">
                <input type="date" class="form-control" id="carrera_id" name="carrera_id" value="{{old('carrera_id',$reticula->carrera_id)}}" {{$des}}>
                @error("carrera_id")
                  <p class="text-danger">Error en: {{$message}}</p>
                @enderror
              </div>
    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
  </form>

@endsection
