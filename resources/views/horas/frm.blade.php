@extends("plantillas/plantilla2")

@section("contenido1")
@include("horas/tablahtml")
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
<form action="{{route('horas.store')}}" method="POST">
  
  @elseif($accion=='E')
  <h1>Editando</h1>
  <form action="{{route('horas.update',$hora->id)}}" method="POST">

  @elseif($accion=='D')
  <h1>Eliminar</h1>

  <form action="{{route('horas.destroy',$hora->id)}}" method="post">
  @endif

    @csrf
    <div class="row mb-3">
      <label for="hora_ini" class="col-sm-2 col-form-label">Hora de inicio: </label>
      <div class="col-sm-9">
        <input type="time" class="form-control" id="hora_ini" name="hora_ini" value="{{old('hora_ini',$hora->hora_ini)}}" {{$des}}>
        @error("hora_ini")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>

      <label for="hora_fin" class="col-sm-2 col-form-label">Hora fin: </label>
      <div class="col-sm-9">
        <input type="time" class="form-control" id="hora_fin" name="hora_fin" value="{{old('hora_fin',$hora->hora_fin)}}" {{$des}}>
        @error("hora_fin")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
          
    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
  </form>

@endsection
