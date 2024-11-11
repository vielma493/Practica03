@extends("plantillas/plantilla2")

@section("contenido1")
@include("personals/tablahtml")
@endsection

@section("contenido2")


</ul>
@if ($accion=='C')
<h1>Insertando</h1>
<form action="{{route('personals.store')}}" method="POST">
  
  @elseif($accion=='E')
  <h1>Editando</h1>
  <form action="{{route('personals.update',$personal->id)}}" method="POST">

  @elseif($accion=='D')
  <h1>Eliminar</h1>

  <form action="{{route('personals.destroy',$personal->id)}}" method="post">
  @endif

    @csrf
    <div class="row mb-3">
      <label for="RFC" class="col-sm-2 col-form-label">RFC: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="RFC" name="RFC" value="{{old('RFC',$personal->RFC)}}" {{$des}}>
        @error("RFC")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>

      <label for="nombres" class="col-sm-2 col-form-label">Nombres: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombres" name="nombres" value="{{old('nombres',$personal->nombres)}}" {{$des}}>
        @error("nombres")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
      <div class="row mb-3">
        <label for="apellidop" class="col-sm-2 col-form-label">Apellido Paterno: </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="apellidop" name="apellidop" value="{{old('apellidop',$personal->apellidop)}}" {{$des}}>
          @error("apellidop")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
        </div>
        <div class="row mb-3">
          <label for="apellidom" class="col-sm-2 col-form-label">Apellido Materno: </label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="apellidom" name="apellidom" value="{{old('apellidom',$personal->apellidom)}}" {{$des}}>
            @error("apellidom")
            <p class="text-danger">Error en: {{$message}}</p>
          @enderror
          </div>

          <div class="row mb-3">
            <label for="licenciatura" class="col-sm-2 col-form-label">Nombre corto: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="licenciatura" name="licenciatura" value="{{old('licenciatura',$personal->licenciatura)}}" {{$des}}>
              
            </div>

            <div class="row mb-3">
              <label for="lictit" class="col-sm-2 col-form-label">Titulo licenciatura: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="lictit" name="lictit" value="{{old('lictit',$personal->lictit)}}" {{$des}}>
                @error("lictit")
                <p class="text-danger">Error en: {{$message}}</p>
              @enderror
              </div>

              <div class="row mb-3">
                <label for="especializacion" class="col-sm-2 col-form-label">Especializacion: </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="especializacion" name="especializacion" value="{{old('especializacion',$personal->especializacion)}}" {{$des}}>
                  
                </div>


                <div class="row mb-3">
                  <label for="esptit" class="col-sm-2 col-form-label">Titulo de especializacion: </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="esptit" name="esptit" value="{{old('esptit',$personal->esptit)}}" {{$des}}>
                    @error("esptit")
                    <p class="text-danger">Error en: {{$message}}</p>
                  @enderror
                  </div>

                  <div class="row mb-3">
                    <label for="maestria" class="col-sm-2 col-form-label">Maestria: </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="maestria" name="maestria" value="{{old('maestria',$personal->maestria)}}" {{$des}}>
                      
                    </div>

                  <div class="row mb-3">
                      <label for="maetit" class="col-sm-2 col-form-label">Titulo de maestria: </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="maetit" name="maetit" value="{{old('maetit',$personal->maetit)}}" {{$des}}>
                        @error("maetit")
                        <p class="text-danger">Error en: {{$message}}</p>
                      @enderror
                   </div>
                
                <div class="row mb-3">
                  <label for="doctorado" class="col-sm-2 col-form-label">Doctorado: </label>
                  <div class="col-sm-9">
                  <input type="text" class="form-control" id="doctorado" name="doctorado" value="{{old('doctorado',$personal->doctorado)}}" {{$des}}>
                      
                </div>


                <div class="row mb-3">
                  <label for="doctit" class="col-sm-2 col-form-label">Titulo de doctorado: </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="doctit" name="doctit" value="{{old('doctit',$personal->doctit)}}" {{$des}}>
                    @error("doctit")
                    <p class="text-danger">Error en: {{$message}}</p>
                  @enderror
               </div>


               <div class="row mb-3">
                <label for="fechaingsep" class="col-sm-2 col-form-label">Fecha de ingreso a la SEP: </label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="fechaingsep" name="fechaingsep" value="{{old('fechaingsep',$personal->fechaingsep)}}" {{$des}}>
                  @error("fechaingsep")
                  <p class="text-danger">Error en: {{$message}}</p>
                @enderror
             </div>


             <div class="row mb-3">
              <label for="fechaingins" class="col-sm-2 col-form-label">Fecha de ingreso a la institucion: </label>
              <div class="col-sm-9">
                <input type="date" class="form-control" id="fechaingins" name="fechaingins" value="{{old('fechaingins',$personal->fechaingins)}}" {{$des}}>
                @error("fechaingins")
                <p class="text-danger">Error en: {{$message}}</p>
              @enderror
           </div>

           <div class="row mb-3">
            <label for="depto_id" class="col-sm-2 col-form-label">Departamento: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="depto_id" name="depto_id" value="{{old('depto_id',$personal->depto_id)}}" {{$des}}>
              @error("depto_id")
              <p class="text-danger">Error en: {{$message}}</p>
            @enderror
         </div>

         <div class="row mb-3">
          <label for="puesto_id" class="col-sm-2 col-form-label">Puesto: </label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="puesto_id" name="puesto_id" value="{{old('puesto_id',$personal->puesto_id)}}" {{$des}}>
            @error("puesto_id")
            <p class="text-danger">Error en: {{$message}}</p>
          @enderror
       </div>




          
    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
  </form>

@endsection
