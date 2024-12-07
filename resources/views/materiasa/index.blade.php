@extends("menu2")
@section("contenido2")

@endsection

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4 fw-bold text-primary">Apertura de Materias</h2>

            <!-- Filtro de Periodo y Carrera -->
            <form action="{{ route('materiasa.index') }}" method="get" class="shadow p-4 rounded bg-light">
                <div class="row">
                    <!-- Filtro de Periodo -->
                    <div class="col-md-6 mb-3">
                        <label for="idperiodo" class="fw-bold">Selecciona un Periodo</label>
                        <select name="idperiodo" id="idperiodo" class="form-select" onchange="this.form.submit()">
                            @foreach ($periodos as $periodo)
                                <option value="{{ $periodo->id }}" @if($periodo->id == session('periodo_id')) selected @endif>
                                    {{ $periodo->periodo }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Filtro de Carrera -->
                    <div class="col-md-6 mb-3">
                        <label for="idcarrera" class="fw-bold">Selecciona una Carrera</label>
                        <select name="idcarrera" id="idcarrera" class="form-select" onchange="this.form.submit()">
                            @foreach ($carreras as $carr)
                                <option value="{{ $carr->id }}" @if($carr->id == session('carrera_id')) selected @endif>
                                    {{ $carr->nombrecarrera }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Contenedor de materias por semestre -->
    <div class="row mt-5">
        @for ($semestre = 1; $semestre <= 9; $semestre++)
            @php
                // Verificar si existen retículas y materias antes de acceder
                $materiasSemestre = isset($carrera[0]) && isset($carrera[0]->reticulas[0]) 
                                    ? $carrera[0]->reticulas[0]->materias->where('nivel', $semestre) 
                                    : collect();
            @endphp

            @if ($materiasSemestre->isNotEmpty())
                <div class="col-md-4 col-sm-6 mb-4">
                    <!-- Formulario de selección de materias -->
                    <form action="{{ route('materiasa.store') }}" method="post" class="shadow-sm rounded">
                        @csrf
                        <input type="hidden" name="eliminar" id="eliminar" value="NOELIMINAR">
                        
                        <!-- Tarjeta de materias del semestre -->
                        <div class="card h-100">
                            <div class="card-header text-center bg-primary text-white">
                                <h5 class="m-0">Semestre {{ $semestre }}</h5>
                            </div>
                            <div class="card-body">
                                @foreach ($materiasSemestre as $materia)
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" 
                                            name="m{{ $materia->id }}" 
                                            value="{{ $materia->id }}" 
                                            onchange="enviar(this)"
                                            @if ($ma->firstWhere('materia_id', $materia->id)) checked @endif>
                                        <label class="form-check-label">
                                            {{ $materia->nombremateria }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </form>
                </div>
            @else
                <div class="col-md-4 col-sm-6 mb-4">
                    <!-- Si no hay materias, mostrar un mensaje vacío o diferente -->
                    <div class="card h-100">
                        <div class="card-header text-center bg-secondary text-white">
                            <h5 class="m-0">Semestre {{ $semestre }}</h5>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <p class="text-muted">No hay materias disponibles.</p>
                        </div>
                    </div>
                </div>
            @endif
        @endfor
    </div>
</div>

<script>
    // Función para manejar el cambio de estado de las materias
    function enviar(chbox) {
        chbox.form.eliminar.value = chbox.checked ? "NOELIMINAR" : chbox.value;
        chbox.form.submit();
    }
</script>
