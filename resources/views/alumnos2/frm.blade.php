@extends("plantillas/plantilla2")

@section("contenido1")
@include("alumnos2/tablahtml")
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
<form action="{{route('alumnos.store')}}" method="POST">
  
  @elseif($accion=='E')
  <h1>Editando</h1>
  <form action="{{route('alumnos.update',$alumno->id)}}" method="POST">

  @elseif($accion=='D')
  <h1>Eliminar</h1>

  <form action="{{route('alumnos.destroy',$alumno->id)}}" method="post">
  @endif

    @csrf
    <div class="row mb-3">
      <label for="noctrl" class="col-sm-2 col-form-label">Numero de Control: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="noctrl" name="noctrl" value="{{old('noctrl',$alumno->noctrl)}}" {{$des}}>
        @error("noctrl")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>

      <label for="nombre" class="col-sm-2 col-form-label">Nombre: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre',$alumno->nombre)}}" {{$des}}>
        @error("nombre")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
      <div class="row mb-3">
        <label for="apellidop" class="col-sm-2 col-form-label">Apellido Paterno: </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="apellidop" name="apellidop" value="{{old('apellidop',$alumno->apellidop)}}" {{$des}}>
          @error("apellidop")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
        </div>
        <div class="row mb-3">
          <label for="apellidom" class="col-sm-2 col-form-label">Apellido Materno: </label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="apellidom" name="apellidom" value="{{old('apellidom',$alumno->apellidom)}}" {{$des}}>
            @error("apellidom")
            <p class="text-danger">Error en: {{$message}}</p>
          @enderror
          </div>

          <div class="row mb-3">
            <label for="sexo" class="col-sm-2 col-form-label">Sexo: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="sexo" name="sexo" value="{{old('sexo',$alumno->sexo)}}" {{$des}}>
              @error("sexo")
              <p class="text-danger">Error en: {{$message}}</p>
            @enderror
            </div>


        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email: </label>
            <div class="col-sm-9">
              <input type="email" class="form-control" id="email" name="email" value="{{old('email',$alumno->email)}}" {{$des}}>
              @error("email")
              <p class="text-danger">Error en: {{$message}}</p>
            @enderror
            </div>

            <div class="row mb-3">
              <label for="carreraid" class="col-sm-2 col-form-label">ID Carrera: </label>
              <div class="col-sm-9">
                <input type="carreraid" class="form-control" id="carreraid" name="carreraid" value="{{old('carreraid',$alumno->carrera_id)}}" {{$des}}>
                @error("carreraid")
                <p class="text-danger">Error en: {{$message}}</p>
              @enderror
              </div>
    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
  </form>

@endsection
