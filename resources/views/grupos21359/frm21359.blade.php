@extends("plantillas/plantilla2")

@section("contenido1")
@include("grupos21359/tablahtml21359")
@endsection

@section("contenido2")

@if ($accion=='C')
<h1>Insertando</h1>
<form action="{{route('grupos21359.store')}}" method="POST">
  
  @elseif($accion=='E')
  <h1>Editando</h1>
  <form action="{{route('grupos21359.update',$grupo21359->id)}}" method="POST">

  @elseif($accion=='D')
  <h1>Eliminar</h1>

  <form action="{{route('grupos21359.destroy',$grupo21359->id)}}" method="post">
  @endif

    @csrf
    <div class="row mb-3">
      <label for="grupo" class="col-sm-2 col-form-label">Grupo: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="grupo" name="grupo" value="{{old('grupo',$grupo21359->grupo)}}" {{$des}}>
        @error("grupo")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>

      <label for="descripcion" class="col-sm-2 col-form-label">Descripcion: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{old('descripcion',$grupo21359->descripcion)}}" {{$des}}>
        @error("descripcion")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
      <div class="row mb-3">
        <label for="max_alumnos" class="col-sm-2 col-form-label">Max. Alumnos: </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="max_alumnos" name="max_alumnos" value="{{old('max_alumnos',$grupo21359->max_alumnos)}}" {{$des}}>
          @error("max_alumnos")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
        </div>
      

        <div class="form-group">
          <label for="periodo_id">Selecciona un Periodo</label>
          <select name="periodo_id" id="periodo_id" class="form-control"  value="{{old('periodo_id',$grupo21359->periodo_id)}}" {{$des}}>
              <option value="">-- Selecciona un Periodo --</option>
              @foreach ($periodos as $periodo)
                  <option value="{{ $periodo->id }}">
                      {{ $periodo->periodo }} ({{ $periodo->fechaini }} - {{ $periodo->fechafin }})
                  </option>
              @endforeach
          </select>
          @error("periodo_id")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
          
              <div class="form-group">
                <label for="materia_id">Selecciona una Materia</label>
                <select name="materia_id" id="materia_id" class="form-control"  value="{{old('materia_id',$grupo21359->materia_id)}}" {{$des}}>
                    <option value="">-- Selecciona una Materia --</option>
                    @foreach ($materiaAbiertas as $materiaAbierta)
                        <option value="{{ $materiaAbierta->id }}">
                            {{ $materiaAbierta->materia->nombremateria }}
                        </option>
                    @endforeach

                </select>
                @error("materia_id")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
                

            </div>

            <div class="form-group">
              <label for="personal_id">Selecciona un Personal</label>
              <select name="personal_id" id="personal_id" class="form-control" >
                  <option value="">-- Selecciona un Personal --</option>
                  @foreach ($personals as $personal)
                      <option value="{{ $personal->id }}">
                          {{ $personal->nombres }} {{ $personal->apellidop }} {{ $personal->apellidom }}
                      </option>
                  @endforeach
              </select>
              @error("personal_id")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
          </div>

    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
  </form>

@endsection
