<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkScheduleDetail extends Model
{
    public function getTypeNameAttribute()
    {
        switch ($this->type) {
            case 'hosting_and_ssl': return 'Hosting + SSL';
            case 'web_content': return 'Contenido web';
            case 'web_template': return 'Plantilla web';
            case 'photos_stock': return 'Fotos de stock';
            case 'professional_photos': return 'Fotografía profesional';

            case 'project_in_website': return 'Proyectos en sitio web';
            case 'articles': return 'Artículos en sitio web';
            case 'project_in_professional_media': return 'Proyecto para medios profesionales';
            case 'youtube_video': return 'Proyectos en vídeo (Youtube)';

            case 'facebook_post': return 'Publicaciones en Facebook';
            case 'linkedin_post': return 'Publicaciones en Linkedin';
            case 'google_plus_post': return 'Publicaciones en Google`+';
            case 'twitter_post': return 'Publicaciones en Twitter';
            case 'pinterest_post': return 'Publicaciones en Pinterest';
            case 'instagram_post': return 'Publicaciones en Instagram';

            case 'facebook_ads': return 'Publicidad en Facebook';
            case 'linkedin_ads': return 'Publicidad en Linkedin';
            case 'google_plus_ads': return 'Publicidad en Google+';
            case 'twitter_ads': return 'Publicidad en Twitter';
            case 'pinterest_ads': return 'Publicidad en Pinterest';
            case 'instagram_ads': return 'Publicidad en Instagram';

            case 'register_in_google_maps': return 'Registro en Google Maps';
            case 'button_call_me_back': return 'Botón de llamada (call me back)';
            case 'results_report': return 'Informes de resultado';

            default: return 'Actividad desconocida';
        }
    }

    public function getStateNameAttribute()
    {
        switch ($this->state)
        {
            case -1: return 'Actividad cancelada';
            case 0: return 'Actividad pediente por realizar';
            case +1: return 'Actividad realizada';
        }
        return 'Estado desconocido';
    }

    public function getStateColorAttribute()
    {
        switch ($this->state)
        {
            case -1: return 'danger';
            case 0: return 'warning';
            case +1: return 'success';
        }
        return 'default';
    }

    public function work_schedule()
    {
        return $this->belongsTo('App\WorkSchedule');
    }
}
