@extends("plantillas/plantilla2")



@section("contenido2")

@if ($accion=='C')
<h1>Insertando</h1>
<form action="{{route('grupoHorarios21359.store')}}" method="POST">
  
  @elseif($accion=='E')
  <h1>Editando</h1>
  <form action="{{route('grupoHorarios21359.update',$grupoHorario21359->id)}}" method="POST">

  @elseif($accion=='D')
  <h1>Eliminar</h1>

  <form action="{{route('grupoHorarios21359.destroy',$grupoHorario21359->id)}}" method="post">
  @endif

    @csrf
    <div class="row mb-3">
      <label for="grupo21359_id" class="col-sm-2 col-form-label">Grupo: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="grupo21359_id" name="grupo21359_id" value="{{old('grupo21359_id',$grupoHorario21359->grupo21359_id)}}" {{$des}}>
        @error("grupo21359_id")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>

      <div class="form-group">
        <label for="lugar_id">Selecciona un Lugar</label>
        <select name="lugar_id" id="lugar_id" class="form-control" value="{{old('lugar_id',$grupoHorario21359->lugar_id)}}" {{$des}}>
            <option value="">-- Selecciona un Lugar --</option>
            @foreach ($lugares as $lugar)
                <option value="{{ $lugar->id }}">
                    {{ $lugar->nombrelugar }} ({{ $lugar->edificio->nombreedificio }})
                </option>
            @endforeach
        </select>
        @error("lugar_id")
        <p class="text-danger">Error en: {{$message}}</p>
      @enderror
        </div>

        <div class="form-group">
          <label for="dia">Dia</label>
          <input type="text" name="dia" id="dia" class="form-control" value="Lunes" {{$des}} disabled>
          @error("dia")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>

        <!-- Campo Hora -->
        <div class="form-group">
          <label for="hora">Hora</label>
        <input type="text" name="hora" id="hora" class="form-control" value="7-8" {{$des}} disabled>
          @error("hora")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>

    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
  </form>

@endsection
