@extends("menu2")
@section("contenido2")

@endsection
<div class="container mt-4">
    <h2 class="text-center">Asignación de Grupos</h2>
    <form>
        <div class="row mb-3">
            <div class="col-md-3">
                <label for="fecha" class="form-label">Fecha:</label>
                <input type="date" class="form-control" id="fecha" name="fecha">
            </div>
            <div class="col-md-2">
                <label for="max_alumnos" class="form-label">Max. Alu.:</label>
                <input type="number" class="form-control" id="max_alumnos" name="max_alumnos">
            </div>
            <div class="col-md-3">
                <label for="grupo" class="form-label">Grupo:</label>
                <input type="text" class="form-control" id="grupo" name="grupo">
            </div>
            <div class="col-md-4">
                <label for="descripcion" class="form-label">Descripción:</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion">
            </div>
        </div>

        <form method="GET" action="{{ route('materias.index') }}">
            <div class="col-md-3">
                <label for="idperiodo" class="font-weight-bold">Periodo:</label>
                <select name="idperiodo" id="idperiodo" class="form-control" onchange="this.form.submit()">
                    <option value="">Seleccione un periodo...</option>
                    @foreach ($periodos as $periodo)
                        <option value="{{ $periodo->id }}" {{ request('idperiodo') == $periodo->id ? 'selected' : '' }}>
                            {{ $periodo->periodo }}
                        </option>
                    @endforeach
                </select>
            </div>
        
            <div class="col-md-3">
                <label for="idcarrera" class="font-weight-bold">Carrera:</label>
                <select name="idcarrera" id="idcarrera" class="form-control" onchange="this.form.submit()">
                    <option value="">Seleccione una carrera...</option>
                    @foreach ($carreras as $carrera)
                        <option value="{{ $carrera->id }}" {{ request('idcarrera') == $carrera->id ? 'selected' : '' }}>
                            {{ $carrera->nombrecarrera }}
                        </option>
                    @endforeach
                </select>
            </div>
        
            @if (request('idperiodo') && request('idcarrera'))
                <div class="col-md-3 mt-3">
                    <label for="nivel">Semestre:</label>
                    <select id="nivel" name="nivel" class="form-select" onchange="this.form.submit()">
                        <option value="">Seleccione un semestre...</option>
                        @for ($i = 1; $i <= 9; $i++)
                            <option value="{{ $i }}" {{ request('nivel') == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>
                </div>
            @endif
        </form>
        

    
    </form>
    <ul id="materias_abiertas" class="list-group mt-3">
        @foreach ($materias as $materia)
            <li class="list-group-item">
                <input 
                    type="radio" 
                    id="materia_{{ $materia->id }}" 
                    name="materia_id" 
                    value="{{ $materia->id }}" 
                    class="form-check-input">
                <label for="materia_{{ $materia->id }}" class="form-check-label">
                    {{ $materia->nombremateria }}
                </label>
            </li>
        @endforeach
    </ul>
    
       

        <div class="col-md-3">
            <h5>Horario</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th>L</th>
                        <th>M</th>
                        <th>Mi</th>
                        <th>J</th>
                        <th>V</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($hora = 7; $hora < 22; $hora++) 
                    
                    <td>{{ sprintf('%02d:00-%02d:00', $hora, $hora + 1) }}</td>
                    <td><input type="checkbox" name="horario[{{ $hora }}][L]"></td>
                    <td><input type="checkbox" name="horario[{{ $hora }}][M]"></td>
                    <td><input type="checkbox" name="horario[{{ $hora }}][Mi]"></td>
                    <td><input type="checkbox" name="horario[{{ $hora }}][J]"></td>
                    <td><input type="checkbox" name="horario[{{ $hora }}][V]"></td>
                </tr>
            @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const periodoSelect = document.getElementById('idperiodo');
        const carreraSelect = document.getElementById('idcarrera');
        const semestreDiv = document.getElementById('semestre-div');

        function toggleSemestreVisibility() {
            if (periodoSelect.value && carreraSelect.value) {
                semestreDiv.style.display = 'block';
            } else {
                semestreDiv.style.display = 'none';
            }
        }

        // Inicializar visibilidad
        toggleSemestreVisibility();

        // Escuchar cambios
        periodoSelect.addEventListener('change', toggleSemestreVisibility);
        carreraSelect.addEventListener('change', toggleSemestreVisibility);
    });
</script>
