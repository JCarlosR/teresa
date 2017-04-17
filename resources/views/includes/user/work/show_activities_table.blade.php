<div class="table-responsive">
    <table id="schedule-table" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>{{ $client->trade_name }}</th>
            <th colspan="12">{{ $workSchedule->start_date->format('Y') }}</th>
        </tr>
        <tr id="schedule-tr-months">
            <th>Actividad</th>
            @for ($i=0; $i<12; ++$i)
                <th>{{ $workSchedule->start_date->addMonth($i)->format('M') }}</th>
            @endfor
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Optimización SEO</th>
        </tr>
        <tr>
            <td>Proyectos en sitio web</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'project_in_website' ])
        </tr>
        <tr>
            <td>Artículos</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'articles' ])
        </tr>
        <tr>
            <td>Proyecto para medios profesionales</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'project_in_professional_media' ])
        </tr>
        <tr>
            <td>Vídeos en Youtube</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'youtube_video' ])
        </tr>
        <tr>
            <th scope="row">Registro en Google Maps</th>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'register_in_google_maps' ])
        </tr>
        <tr>
            <th scope="row">Perfile sociales</th>
        </tr>
        <tr>
            <td>Publicaciones en Facebook, LinkedIn y Google+</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'social_post' ])
        </tr>
        <tr>
            <td>Publicidad en Facebook</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'facebook_ads' ])
        </tr>
        <tr>
            <td>Publicidad en LinkedIn</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'linkedin_ads' ])
        </tr>
        <tr>
            <th scope="row">Botón de llamada (call me back)</th>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'button_call_me_back' ])
        </tr>
        <tr>
            <th scope="row">Informes de resultado</th>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'results_report' ])
        </tr>
        </tbody>
    </table>
</div>