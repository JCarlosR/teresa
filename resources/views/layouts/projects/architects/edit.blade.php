<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="project-architect">Arquitectura</label>
            <input type="text" name="architect" id="project-architect" class="form-control" placeholder="Arquitectura del proyecto"
                   value="{{ old('architect', $architect_project ? $architect_project->architect : '') }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="project-structure">Estructuras</label>
            <input type="text" name="structure" id="project-structure" class="form-control" placeholder="Estructuras del proyecto"
                   value="{{ old('structure', $architect_project ? $architect_project->structure : '') }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="project-location">Ubicación</label>
            <input type="text" name="location" id="project-location" class="form-control" placeholder="Ubicación del proyecto"
                   value="{{ old('location', $architect_project ? $architect_project->location : '') }}">
        </div>
    </div>
    <div class="col-md-4">
        <label for="ground_area">Área terreno</label>
        <input type="number" min="0" step="0.001" name="ground_area" id="ground_area" class="form-control" placeholder="En metros cuadrados"
               value="{{ old('ground_area', $architect_project ? $architect_project->ground_area  : '') }}">
    </div>
    <div class="col-md-4">
        <label for="project_area">Área proyecto</label>
        <input type="number" min="0" step="0.001" name="project_area" id="project_area" class="form-control" placeholder="En metros cuadrados"
               value="{{ old('project_area', $architect_project ? $architect_project->project_area : '') }}">
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="project-builder">Constructora</label>
            <input type="text" name="builder" id="project-builder" class="form-control" placeholder="Constructora del proyecto"
                   value="{{ old('builder', $architect_project ? $architect_project->builder : '') }}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="project-floors"># de pisos</label>
            <input type="number" name="floors" id="project-floors" min="0" class="form-control" placeholder="Número de pisos"
                   value="{{ old('floors', $architect_project ? $architect_project->floors : '') }}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="project-basements"># de sótanos</label>
            <input type="number" name="basements" id="project-basements" min="0" class="form-control" placeholder="Número de sótanos"
                   value="{{ old('basements', $architect_project ? $architect_project->basements : '') }}">
        </div>
    </div>
</div>