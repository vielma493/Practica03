@extends("plantillas/plantilla2")

@section("contenido1")
@include("periodos/tablahtml")
@endsection

@section("contenido2")


</ul>
@if ($accion=='C')
<h1>Insertando</h1>
<form action="{{route('periodos.store')}}" method="POST">
  
  @elseif($accion=='E')
  <h1>Editando</h1>
  <form action="{{route('periodos.update',$periodo->id)}}" method="POST">

  @elseif($accion=='D')
  <h1>Eliminar</h1>

  <form action="{{route('periodo.destroy',$periodo->id)}}" method="post">
  @endif

    @csrf
    <div class="row mb-3">
      <label for="idperiodo" class="col-sm-2 col-form-label">Id Periodo: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idperiodo" name="idperiodo" value="{{old('idperiodo',$periodo->idperiodo)}}" {{$des}}>
        @error("idperiodo")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>

      <label for="periodo" class="col-sm-2 col-form-label">Periodo: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="periodo" name="periodo" value="{{old('periodo',$periodo->periodo)}}" {{$des}}>
        @error("periodo")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
      <div class="row mb-3">
        <label for="desccorta" class="col-sm-2 col-form-label">Descripcion Corta: </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="desccorta" name="desccorta" value="{{old('desccorta',$periodo->desccorta)}}" {{$des}}>
          @error("desccorta")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
        </div>
        <div class="row mb-3">
          <label for="fechaini" class="col-sm-2 col-form-label">Fecha Inicio: </label>
          <div class="col-sm-9">
            <input type="date" class="form-control" id="fechaini" name="fechaini" value="{{old('fechaini',$periodo->fechaini)}}" {{$des}}>
            @error("fechaini")
            <p class="text-danger">Error en: {{$message}}</p>
          @enderror
          </div>

          <div class="row mb-3">
            <label for="fechafin" class="col-sm-2 col-form-label">Fecha Fin: </label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="fechafin" name="fechafin" value="{{old('fechafin',$periodo->fechafin)}}" {{$des}}>
              @error("fechafin")
              <p class="text-danger">Error en: {{$message}}</p>
            @enderror
            </div>

          
    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
  </form>

@endsection
