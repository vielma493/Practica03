@extends("plantillas/plantilla2")

@section("contenido1")
@include("personal_plazas/tablahtml")
@endsection

@section("contenido2")


</ul>
@if ($accion=='C')
<h1>Insertando</h1>
<form action="{{route('personal_plazas.store')}}" method="POST">
  
  @elseif($accion=='E')
  <h1>Editando</h1>
  <form action="{{route('personal_plazas.update',$personal_plaza->id)}}" method="POST">

  @elseif($accion=='D')
  <h1>Eliminar</h1>

  <form action="{{route('personal_plazas.destroy',$personal_plaza->id)}}" method="post">
  @endif

    @csrf
    <div class="row mb-3">
      <label for="tiponombramiento" class="col-sm-2 col-form-label">Tipo nombramiento: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="tiponombramiento" name="tiponombramiento" value="{{old('tiponombramiento',$personal_plaza->tiponombramiento)}}" {{$des}}>
        @error("idmateria")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>

      <label for="plaza_id" class="col-sm-2 col-form-label">Plaza: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="plaza_id" name="plaza_id" value="{{old('plaza_id',$personal_plaza->plaza_id)}}" {{$des}}>
        @error("plaza_id")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
      <div class="row mb-3">
        <label for="personal_id" class="col-sm-2 col-form-label">Personal: </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="personal_id" name="personal_id" value="{{old('personal_id',$personal_plaza->personal_id)}}" {{$des}}>
          @error("personal_id")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
        </div>
       

          
    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
  </form>

@endsection
