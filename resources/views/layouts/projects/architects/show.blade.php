@if ($architect_project)
    <p class="small">Arquitectura</p>
    <p>{{ $architect_project->architect ?: '---' }}</p>
    <p class="small">Estructuras</p>
    <p>{{ $architect_project->structure ?: '---' }}</p>

    <p class="small">Ubicación</p>
    <p>{{ $architect_project->location ?: '---' }}</p>
    <p class="small">Área terreno</p>
    <p>{{ $architect_project->ground_area  ?: '---' }}</p>
    <p class="small">Área proyecto</p>
    <p>{{ $architect_project->project_area ?: '---' }}</p>

    <p class="small">Constructora</p>
    <p>{{ $architect_project->builder ?: '---' }}</p>
    <p class="small"># de pisos</p>
    <p>{{ $architect_project->floors ?: '---' }}</p>
    <p class="small"># de sótanos</p>
    <p>{{ $architect_project->basements ?: '---' }}</p>
@endif
