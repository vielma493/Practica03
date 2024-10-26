@extends("plantillas/plantilla2")

@section("contenido1")
@include("materias/tablahtml")
@endsection

@section("contenido2")


</ul>
@if ($accion=='C')
<h1>Insertando</h1>
<form action="{{route('materias.store')}}" method="POST">
  
  @elseif($accion=='E')
  <h1>Editando</h1>
  <form action="{{route('materias.update',$materia->id)}}" method="POST">

  @elseif($accion=='D')
  <h1>Eliminar</h1>

  <form action="{{route('materias.destroy',$materia->id)}}" method="post">
  @endif

    @csrf
    <div class="row mb-3">
      <label for="idmateria" class="col-sm-2 col-form-label">Id Materia: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idmateria" name="idmateria" value="{{old('idmateria',$materia->idmateria)}}" {{$des}}>
        @error("idmateria")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>

      <label for="nombremateria" class="col-sm-2 col-form-label">Materia: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombremateria" name="nombremateria" value="{{old('nombremateria',$materia->nombremateria)}}" {{$des}}>
        @error("nombremateria")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
      <div class="row mb-3">
        <label for="nivel" class="col-sm-2 col-form-label">Nivel: </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="nivel" name="nivel" value="{{old('nivel',$materia->nivel)}}" {{$des}}>
          @error("nivel")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
        </div>
        <div class="row mb-3">
          <label for="nombremediano" class="col-sm-2 col-form-label">Nombre mediano: </label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="nombremediano" name="nombremediano" value="{{old('nombremediano',$materia->nombremediano)}}" {{$des}}>
            @error("nombremediano")
            <p class="text-danger">Error en: {{$message}}</p>
          @enderror
          </div>

          <div class="row mb-3">
            <label for="nombrecorto" class="col-sm-2 col-form-label">Nombre corto: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nombrecorto" name="nombrecorto" value="{{old('nombrecorto',$materia->nombrecorto)}}" {{$des}}>
              @error("nombrecorto")
              <p class="text-danger">Error en: {{$message}}</p>
            @enderror
            </div>

            <div class="row mb-3">
              <label for="modalidad" class="col-sm-2 col-form-label">Modalidad: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="modalidad" name="modalidad" value="{{old('modalidad',$materia->modalidad)}}" {{$des}}>
                @error("modalidad")
                <p class="text-danger">Error en: {{$message}}</p>
              @enderror
              </div>

              <div class="row mb-3">
                <label for="reticula_id" class="col-sm-2 col-form-label">Reticula: </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="reticula_id" name="reticula_id" value="{{old('reticula_id',$materia->reticula_id)}}" {{$des}}>
                  @error("reticula_id")
                  <p class="text-danger">Error en: {{$message}}</p>
                @enderror
                </div>

          
    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
  </form>

@endsection
