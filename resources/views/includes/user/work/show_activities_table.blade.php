<div class="table-responsive">
    <table id="schedule-table" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>{{ $client->trade_name }}</th>
            <th colspan="12">Cronograma de trabajo {{ $workSchedule->start_date->format('Y') }}</th>
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
            <th scope="row">Plataforma web</th>
        </tr>
        <tr>
            <td>Hosting + SSL</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'hosting_and_ssl' ])
        </tr>
        <tr>
            <td>Contenido web</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'web_content' ])
        </tr>
        <tr>
            <td>Plantilla web</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'web_template' ])
        </tr>
        <tr>
            <td>Fotos de stock</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'photos_stock' ])
        </tr>
        <tr>
            <td>Fotografía profesional</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'professional_photos' ])
        </tr>

        <tr>
            <th scope="row">Proyectos y artículos</th>
        </tr>
        <tr>
            <td>Proyectos en sitio web</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'project_in_website' ])
        </tr>
        <tr>
            <td>Artículos en sitio web</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'articles' ])
        </tr>
        <tr>
            <td>Proyectos en medios profesionales</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'project_in_professional_media' ])
        </tr>
        <tr>
            <td>Proyectos en vídeo (Youtube)</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'youtube_video' ])
        </tr>

        <tr>
            <th scope="row">Registro en Google Maps</th>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'register_in_google_maps' ])
        </tr>

        <tr>
            <th scope="row">Publicaciones</th>
        </tr>
        <tr>
            <td>Facebook</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'facebook_post' ])
        </tr>
        <tr>
            <td>LinkedIn</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'linkedin_post' ])
        </tr>
        <tr>
            <td>Google+</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'google_plus_post' ])
        </tr>
        <tr>
            <td>Twitter</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'twitter_post' ])
        </tr>
        <tr>
            <td>Pinterest</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'pinterest_post' ])
        </tr>
        <tr>
            <td>Instagram</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'instagram_post' ])
        </tr>

        <tr>
            <th scope="row">Publicidad</th>
        </tr>
        <tr>
            <td>Facebok</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'facebook_ads' ])
        </tr>
        <tr>
            <td>LinkedIn</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'linkedin_ads' ])
        </tr>
        <tr>
            <td>Google+</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'google_plus_ads' ])
        </tr>
        <tr>
            <td>Twitter</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'twitter_ads' ])
        </tr>
        <tr>
            <td>Pinterest</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'pinterest_ads' ])
        </tr>
        <tr>
            <td>Instagram</td>
            @include('includes.user.work.show_activities_in_tds', ['type' => 'instagram_ads' ])
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