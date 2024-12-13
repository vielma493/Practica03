@extends("menu2")
@section("contenido2")

@endsection

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4 fw-bold text-primary">📚 Apertura de Materias</h2>

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
                $materiasSemestre = isset($carrera[0]) && isset($carrera[0]->reticulas[0]) 
                                    ? $carrera[0]->reticulas[0]->materias->where('nivel', $semestre) 
                                    : collect();
            @endphp

            <div class="col-md-4 col-sm-6 mb-4">
                @if ($materiasSemestre->isNotEmpty())
                    <!-- Formulario de selección de materias -->
                    <form action="{{ route('materiasa.store') }}" method="post" class="shadow-sm rounded">
                        @csrf
                        <input type="hidden" name="eliminar" id="eliminar" value="NOELIMINAR">
                        
                        <!-- Tarjeta de materias del semestre -->
                        <div class="card h-100">
                            <div class="card-header text-center bg-primary text-white">
                                <h5 class="m-0">📘 Semestre {{ $semestre }}</h5>
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
                @else
                    <!-- Si no hay materias -->
                    <div class="card h-100">
                        <div class="card-header text-center bg-secondary text-white">
                            <h5 class="m-0">Semestre {{ $semestre }}</h5>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <p class="text-muted">🎓 No hay materias disponibles.</p>
                        </div>
                    </div>
                @endif
            </div>
        @endfor
    </div>
</div>

<script>
    function enviar(chbox) {
        chbox.form.eliminar.value = chbox.checked ? "NOELIMINAR" : chbox.value;
        chbox.form.submit();
    }
</script>

<style>
 /* General Styles */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f0f8ff;
    margin: 0;
    padding: 0;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Title */
.title {
    font-size: 2.5rem;
    font-weight: bold;
    color: #3b3f55;
    margin-bottom: 40px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

/* Filter Box */
.filter-box {
    background: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    margin-bottom: 40px;
}

.filter-box label {
    display: block;
    font-size: 1rem;
    font-weight: bold;
    margin-bottom: 10px;
    color: #4c566a;
}

.filter-box select {
    width: 100%;
    padding: 10px 15px;
    font-size: 1rem;
    color: #3b3f55;
    border: 2px solid #d1d9e6;
    border-radius: 5px;
    transition: all 0.3s ease;
}

.filter-box select:focus {
    outline: none;
    border-color: #a7c4fd;
}

/* Semester Cards */
.semester-card {
    background: #ffffff;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin-bottom: 30px;
    transition: transform 0.3s ease;
}

.semester-card:hover {
    transform: translateY(-10px);
}

.semester-card .card-header {
    background: linear-gradient(135deg, #a7c4fd, #89a1f5);
    color: #ffffff;
    text-align: center;
    padding: 15px;
    font-size: 1.2rem;
    font-weight: bold;
}

.semester-card .card-body {
    padding: 20px;
}

.semester-card .form-check {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.semester-card .form-check-input {
    margin-right: 10px;
    transform: scale(1.2);
}

.semester-card .form-check-label {
    font-size: 1rem;
    color: #4c566a;
}

/* Empty State */
.semester-card.empty .card-header {
    background: #e4e8f0;
    color: #888fa9;
}

.semester-card.empty .card-body {
    text-align: center;
    font-size: 1rem;
    color: #888fa9;
    padding: 30px 20px;
}

/* Responsiveness */
@media (max-width: 768px) {
    .title {
        font-size: 1.8rem;
    }

    .filter-box {
        padding: 15px;
    }

    .semester-card .card-header {
        font-size: 1rem;
    }
}

</style>
