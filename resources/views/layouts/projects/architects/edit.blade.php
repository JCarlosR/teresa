<div class="form-group">
    <label for="project-architect" class="col-sm-2 control-label">Arquitectura</label>
    <div class="col-sm-10">
        <input type="text" name="architect" id="project-architect" class="form-control" placeholder="Arquitectura del proyecto"
               value="{{ old('architect', $architect_project ? $architect_project->architect : '') }}">
    </div>
</div>
<div class="form-group">
    <label for="project-structure" class="col-sm-2 control-label">Estructuras</label>
    <div class="col-sm-10">
        <input type="text" name="structure" id="project-structure" class="form-control" placeholder="Estructuras del proyecto"
               value="{{ old('structure', $architect_project ? $architect_project->structure : '') }}">
    </div>
</div>


<div class="form-group">
    <label for="project-location" class="col-sm-2 control-label">Ubicación</label>
    <div class="col-sm-10">
        <input type="text" name="location" id="project-location" class="form-control" placeholder="Ubicación del proyecto"
               value="{{ old('location', $architect_project ? $architect_project->location : '') }}">
    </div>
</div>
<div class="form-group">
    <label for="ground_area" class="col-sm-2 control-label">Área terreno</label>
    <div class="col-sm-10">
        <input type="number" min="0" step="0.001" name="ground_area" id="ground_area" class="form-control" placeholder="En metros cuadrados"
               value="{{ old('ground_area', $architect_project ? $architect_project->ground_area  : '') }}">
    </div>
</div>
<div class="form-group">
    <label for="project_area" class="col-sm-2 control-label">Área proyecto</label>
    <div class="col-sm-10">
        <input type="number" min="0" step="0.001" name="project_area" id="project_area" class="form-control" placeholder="En metros cuadrados"
               value="{{ old('project_area', $architect_project ? $architect_project->project_area : '') }}">
    </div>
</div>


<div class="form-group">
    <label for="project-builder" class="col-sm-2 control-label">Constructora</label>
    <div class="col-sm-10">
        <input type="text" name="builder" id="project-builder" class="form-control" placeholder="Constructora del proyecto"
               value="{{ old('builder', $architect_project ? $architect_project->builder : '') }}">
    </div>
</div>
<div class="form-group">
    <label for="project-floors" class="col-sm-2 control-label"># de pisos</label>
    <div class="col-sm-10">
        <input type="number" name="floors" id="project-floors" min="0" class="form-control" placeholder="Número de pisos"
               value="{{ old('floors', $architect_project ? $architect_project->floors : '') }}">
    </div>
</div>
<div class="form-group">
    <label for="project-basements" class="col-sm-2 control-label"># de sótanos</label>
    <div class="col-sm-10">
        <input type="number" name="basements" id="project-basements" min="0" class="form-control" placeholder="Número de sótanos"
               value="{{ old('basements', $architect_project ? $architect_project->basements : '') }}">
    </div>
</div>
