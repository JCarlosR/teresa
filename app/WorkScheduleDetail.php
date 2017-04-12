<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkScheduleDetail extends Model
{
    public function getTypeNameAttribute()
    {
        switch ($this->type) {
            case 'project_in_website': return 'Proyectos en sitio web';
            case 'articles': return 'Artículos';
            case 'project_in_professional_media': return 'Proyecto para medios profesionales';
            case 'youtube_video': return 'Vídeos en Youtube';

            case 'social_post': return 'Publicaciones en Facebook, LinkedIn y Google+';
            case 'facebook_ads': return 'Publicidad en Facebook';
            case 'linkedin_ads': return 'Publicidad en LinkedIn';

            case 'register_in_google_maps': return 'Registro en Google Maps';
            case 'button_call_me_back': return 'Botón de llamada (call me back)';
            case 'results_report': return 'Informes de resultado';

            default: return 'Actividad desconocida';
        }
    }

    public function work_schedule()
    {
        return $this->belongsTo('App\WorkSchedule');
    }
}
