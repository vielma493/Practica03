@extends("plantillas/plantilla2")

@section("contenido1")
@include("plazas/tablahtml")
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
<form action="{{route('plazas.store')}}" method="POST">
  
  @elseif($accion=='E')
  <h1>Editando</h1>
  <form action="{{route('plazas.update',$plaza->id)}}" method="POST">

  @elseif($accion=='D')
  <h1>Eliminar</h1>

  <form action="{{route('plazas.destroy',$plaza->id)}}" method="post">
  @endif


    @csrf
    <div class="row mb-3">
      <label for="idplaza" class="col-sm-2 col-form-label">Id plaza: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idplaza" name="idplaza" value="{{old('idplaza',$plaza->idplaza)}}" {{$des}}>
        @error("idplaza")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
      <div class="row mb-3">
        <label for="nombrePlaza" class="col-sm-2 col-form-label">Nombre Plaza: </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="nombrePlaza" name="nombrePlaza" value="{{old('nombreplaza',$plaza->nombreplaza)}}" {{$des}}>
          @error("nombreplaza")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
        </div>

    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
  </form>

@endsection
