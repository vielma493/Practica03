@extends("plantillas/plantilla2")

@section("contenido1")
@include("lugars/tablahtml")
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
<form action="{{route('lugars.store')}}" method="POST">
  
  @elseif($accion=='E')
  <h1>Editando</h1>
  <form action="{{route('lugars.update',$lugar->id)}}" method="POST">

  @elseif($accion=='D')
  <h1>Eliminar</h1>

  <form action="{{route('lugars.destroy',$lugar->id)}}" method="post">
  @endif

    @csrf
    <div class="row mb-3">
      <label for="nombrelugar" class="col-sm-2 col-form-label">Nombre lugar: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombrelugar" name="nombrelugar" value="{{old('nombrelugar',$lugar->nombrelugar)}}" {{$des}}>
        @error("nombrelugar")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>

      <label for="nombrecorto" class="col-sm-2 col-form-label">Nombre corto: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombrecorto" name="nombrecorto" value="{{old('nombrecorto',$lugar->nombrecorto)}}" {{$des}}>
        @error("nombrecorto")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>

      <label for="edificio_id" class="col-sm-2 col-form-label">Edificio: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="edificio_id" name="edificio_id" value="{{old('edificio_id',$lugar->edificio_id)}}" {{$des}}>
        @error("edificio_id")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
      
          
    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
  </form>

@endsection
